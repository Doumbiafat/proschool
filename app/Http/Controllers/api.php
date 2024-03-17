<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Classe;
use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:etudiant,enseignant,admin',
            'matiere' => [
                'required_if:role,enseignant',
                'string',
                'max:255',
                'in:math,anglais,physique' // Les trois options autorisées
            ],
            'matricule' => [
                'nullable', // Rend le champ matricule facultatif
                'string',
                'max:255'
            ]
        ]);

        $user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        $classe_id = $request->input('classe_id');

        if ($request->role === 'enseignant') {
            Enseignant::create([
                'id_enseignant' => $user->id,
                'classe_id' => $classe_id,
                'matiere' => $request->matiere
            ]);
        } elseif ($request->role === 'etudiant') {
            Etudiant::create([
                'id_etudiant' => $user->id,
                'classe_id' => $classe_id,
                'matricule' => $request->matricule
            ]);
        } elseif ($request->role === 'admin') {
            Admin::create([
                'id_admin' => $user->id
            ]);
        }

        return response()->json([
            'message' => 'Utilisateur enregistré avec succès.'
        ], 200);
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
            "role" => "required|in:etudiant,enseignant,admin"
        ]);

        if (Auth::attempt($request->only('email', 'password', 'role'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            $classes = Classe::all();
            $userss = Auth::user()->where('role', 'etudiant')->whereHas('etudiant')->with('etudiant')->first();
            $users = Auth::user()->where('role', 'enseignant')->whereHas('enseignant')->with('enseignant')->first();
            $usersss = Auth::user()->where('role', 'etudiant')->whereHas('etudiant')
                ->with(['etudiant' => function ($query) {
                    $query->with('classe');
                }])
                ->first();
            $userssse = Auth::user()->where('role', 'enseignant')->whereHas('enseignant')
                ->with(['enseignant' => function ($query) {
                    $query->with('classe');
                }])
                ->first();

            if (auth()->user()->role === 'etudiant') {
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'user' => $user,
                    'data' => $usersss,
                    'token' => $token
                ], 200);
            } elseif (auth()->user()->role === 'enseignant') {
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'user' => $user,
                    'data' => ['user' => $users, 'enseignant' => $userssse],
                    'token' => $token
                ], 200);
            } elseif (auth()->user()->role === 'admin') {
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'user' => $user,
                    'data' => $classes,
                    'token' => $token
                ], 200);
            } else {
                return response()->json([
                    "status" => 0,
                    "message" => "Rôle non valide"
                ], 401);
            }
        }

        return response()->json([
            'message' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.'
        ], 401);
    }

    public function Ajouteruser(Request $request)
    {
        $classes = Classe::all();
        return response()->json([
            'classes' => $classes
        ], 200);
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::user()->tokens()->delete();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return response()->json([
                'message' => 'Déconnexion réussie.'
            ], 200);
        } else {
            return response()->json([
                "status" => 0,
                "message" => "Aucun utilisateur connecté"
            ], 401);
        }
    }

    public function profile()
    {
        $user = Auth::user();

        if ($user) {
            return response()->json([
                'user' => $user
            ], 200);
        } else {
            return response()->json([
                'message' => 'Utilisateur non connecté.'
            ], 401);
        }
    }

    public function listEtudiants()
    {
        $etudiants = User::where('role', 'etudiant')->with('etudiant')->get();
        $enseignants = User::where('role', 'enseignant')->with('enseignant')->get();

        return response()->json([
            'etudiants' => $etudiants,
            'enseignants' => $enseignants
        ], 200);
    }

    public function noteEtudiants()
    {
        $user = Auth::user();

        if ($user->role === 'enseignant' && $user->enseignant) {
            $classe = $user->enseignant->classe;

            if ($classe) {
                $etudiants = $classe->etudiants;
                $matiere = $user->enseignant->matiere;
                return response()->json([
                    'etudiants' => $etudiants,
                    'matiere' => $matiere
                ], 200);
            }
        }

        return response()->json([
            'message' => 'Vous devez être un enseignant pour accéder à cette fonctionnalité.'
        ], 401);
    }

    public function voirmesnotes()
    {
        $user = Auth::user();

        if ($user->role === 'etudiant' && $user->etudiant) {
            $etudiant = $user->etudiant;
            $notes = $etudiant->notes()->first();

            return response()->json([
                'notes' => $notes
            ], 200);
        }

        return response()->json([
            'message' => 'Vous devez être un étudiant pour accéder à cette fonctionnalité.'
        ], 401);
    }

    public function Listenotes()
    {
        $etudiants = User::where('role', 'etudiant')->get();

        if ($etudiants->count() > 0) {
            $allNotes = [];

            foreach ($etudiants as $etudiant) {
                if ($etudiant->etudiant) {
                    $notes = $etudiant->etudiant->notes()->first();
                    $allNotes[] = [
                        'etudiant' => $etudiant,
                        'notes' => $notes,
                    ];
                }
            }

            return response()->json([
                'allNotes' => $allNotes
            ], 200);
        }

        return response()->json([
            'message' => 'Aucun étudiant trouvé.'
        ], 401);
    }

    public function createClasse(Request $request)
    {
        $request->validate([
            'libelle' => 'required|unique:classes|max:255',
        ]);

        Classe::create([
            'libelle' => $request->libelle,
        ]);

        return response()->json([
            'message' => 'La classe a été ajoutée avec succès.'
        ], 200);
    }

    public function Listeclasse(Request $request)
    {
        $classeList = Classe::get();

        return response()->json([
            'classeList' => $classeList
        ], 200);
    }

    public function saveNotes(Request $request)
    {
        foreach ($request->notes as $index => $note) {
            $etudiantId = $request->etudiant_ids[$index];
            $matiere = $request->matiere;
            $etudiantNotes = Note::updateOrCreate(
                ['etudiant_id' => $etudiantId],
                [$matiere => json_encode($note)]
            );
        }

        return response()->json([
            'message' => 'Les notes ont été enregistrées avec succès.'
        ], 200);
    }

    public function delete(User $student)
    {
        $student->delete();
        return response()->json([
            'message' => 'Étudiant supprimé avec succès.'
        ], 200);
    }

    public function edit(User $user)
    {
        return response()->json([
            'user' => $user
        ], 200);
    }
}


