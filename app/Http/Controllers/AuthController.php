<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Classe;
use App\Models\Enseignant;
use App\Models\Etudiant;
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
         // Récupération de l'ID de la classe sélectionnée
    $classe_id = $request->input('classe_id');

        if ($request->role === 'enseignant') {
            // Créer un enregistrement dans la table enseignant
            Enseignant::create([
                'id_enseignant' => $user->id,
                'classe_id' => $classe_id,
                'matiere' => $request->matiere
            ]);
        }elseif($request->role === 'etudiant') {
            // Créer un enregistrement dans la table etudiant
            Etudiant::create([
                'id_etudiant' => $user->id,
                'classe_id' => $classe_id,
                'matricule' => $request->matricule
            ]);
        }elseif($request->role === 'admin') {
            // Créer un enregistrement dans la table admins
            Admin::create([
                'id_admin' => $user->id
            ]);
        }

        return response()->json(['message' => 'Utilisateur enregistré avec succès'], 201);
    }

    public function login(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        "email" => "required|email",
        "password" => "required",
        "role" => "required|in:etudiant,enseignant,admin" // Validation du champ role
    ]);

    // Authentifier l'utilisateur
    if (Auth::attempt($request->only('email', 'password','role'))) {
        $request->session()->regenerate();
        $user = Auth::user();



        // Charger la relation enseignant si l'utilisateur est un enseignant

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


        // Vérifier le rôle et rediriger en conséquence
        if (auth()->user()->role === 'etudiant') {
            $token = $user->createToken('auth_token')->plainTextToken;
            return view('etudiant', compact('userss','usersss'));
        } elseif (auth()->user()->role === 'enseignant') {
            $token = $user->createToken('auth_token')->plainTextToken;
              return view('enseignant', compact('user','users','userssse'));

        } elseif (auth()->user()->role === 'admin') {
            $token = $user->createToken('auth_token')->plainTextToken;
            return view('admin', compact('user','classes'));
        } else {
            return response()->json([
                "status" => 0,
                "message" => "Rôle non valide"
            ]);
        }
    }

    // Échec de l'authentification
    return back()->withErrors([
        'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
    ]);
}

public function logout(Request $request)
{
    // Vérifier si l'utilisateur est connecté
    if (Auth::check()) {
        // Supprimer les jetons d'authentification de l'utilisateur
        Auth::user()->tokens()->delete();

        // Détruire la session de l'utilisateur
        $request->session()->invalidate();

        // Effacer les cookies d'authentification
        $request->session()->regenerateToken();

        // Rediriger l'utilisateur vers la page de connexion
        return view('conn');

    } else {
        // Si aucun utilisateur n'est connecté, renvoyer une réponse JSON avec un message d'erreur
        return response()->json([
            "status" => 0,
            "message"=> "Aucun utilisateur connecté",
        ], 401);
    }
}
public function profile()
{
    // Récupérer l'utilisateur connecté
    $user = Auth::user();

    // Vérifier si l'utilisateur est connecté
    if ($user) {
        // Retourner la vue avec les informations de l'utilisateur
        return view('profile', compact('user'));
    } else {
        // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
        return redirect()->route('login');
    }
}

public function listEtudiants()
{
    //
    $etudiants = User::where ('role','etudiant')->with('etudiant')->get();

    $enseignants = User::where('role', 'enseignant')->with('enseignant')->get();

    return view('list', compact('etudiants','enseignants'));
}
public function createClasse(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'libelle' => 'required|unique:classes|max:255',
    ]);

    // Créer une nouvelle classe
    Classe::create([
        'libelle' => $request->libelle,
    ]);

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'La classe a été ajoutée avec succès.');
}
}



