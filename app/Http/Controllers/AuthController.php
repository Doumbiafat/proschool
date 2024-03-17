<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Classe;
use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Note;
use App\Models\Parents;
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
            'role' => 'required|in:etudiant,enseignant,admin,parent',
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
            ],
            'etudiant_id' => [
                'required_if:role,parent', // L'étudiant_id est requis si le rôle est parent
                'exists:etudiants,id' // Assurez-vous que l'étudiant_id existe dans la table des étudiants
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
    $etudiant_id = $request->input('etudiant_id'); // Récupérer l'ID de l'étudiant depuis la requête


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
        }elseif($request->role === 'parent') {
            // Créer un enregistrement dans la table parents
            Parents::create([
                'parent_id' => $user->id,
                'etudiant_id' => $etudiant_id
            ]);
        }
        return redirect()->back()->with('success', 'Utilisateur enregistré avec succès.');
    }

    public function login(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        "email" => "required|email",
        "password" => "required",
        "role" => "required|in:etudiant,enseignant,admin,parent" // Validation du champ role
    ]);

    // Authentifier l'utilisateur
    if (Auth::attempt($request->only('email', 'password','role'))) {
        $request->session()->regenerate();
        $user = Auth::user();

        // Charger la relation enseignant si l'utilisateur est un enseignant
        $classes = Classe::all();
        $userss = Auth::user()->where('role', 'etudiant')->whereHas('etudiant')->with('etudiant')->first();
        //reuperation des donnée
        $users = Auth::user()->where('role', 'enseignant')->whereHas('enseignant')->with('enseignant')->first();
        //recuperation donnée de (l'utisateur connecté pour etudiant)
        $usersss = Auth::user()->where('role', 'etudiant')->whereHas('etudiant')
        ->with(['etudiant' => function ($query) {
        $query->with('classe');
        }])
        ->first();
        //recuperation donnée de (l'utisateur connecté pour enseignant)
        $userssse = Auth::user()->where('role', 'enseignant')->whereHas('enseignant')
        ->with(['enseignant' => function ($query) {
        $query->with('classe');
        }])
        ->first();


        // Vérifier le rôle et rediriger en conséquence
        if (auth()->user()->role === 'etudiant') {
            $token = $user->createToken('auth_token')->plainTextToken;
            return view('etudiant', compact('user','usersss'));
        } elseif (auth()->user()->role === 'enseignant') {
            $token = $user->createToken('auth_token')->plainTextToken;
            return view('enseignant', compact('user','users','userssse'));

        } elseif (auth()->user()->role === 'admin') {
            $token = $user->createToken('auth_token')->plainTextToken;
            return view('admin', compact('user','classes'));
        }elseif (auth()->user()->role === 'parent') {
            $token = $user->createToken('auth_token')->plainTextToken;
            return view('parent', compact('user'));
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
    public function Ajouteruser(Request $request){
        $classes = Classe::all();
        $etudiants = User::where('role', 'etudiant');
        return view('Ajouteruser', compact('classes','etudiants'));



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
    public function noteEtudiants()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Vérifier si l'utilisateur est un enseignant
        if ($user->role === 'enseignant' && $user->enseignant) {
            // Récupérer la classe de l'enseignant connecté
            $classe = $user->enseignant->classe;

            // Vérifier si la classe existe
            if ($classe) {
                // Récupérer les étudiants associés à cette classe
                $etudiants = $classe->etudiants;

                // Récupérer la matière de l'enseignant connecté
                $matiere = $user->enseignant->matiere;

                // Retourner la vue avec les étudiants et la matière de l'enseignant
                return view('notes', compact('etudiants', 'matiere'));
            }
        }


        // Rediriger si l'utilisateur n'est pas un enseignant ou si la relation enseignant/classe n'est pas chargée
        return redirect()->route('login')->withErrors(['error' => 'Vous devez être un enseignant pour accéder à cette fonctionnalité.']);
    }
    public function voirmesnotes()
    {

        // Récupérer l'utilisateur connecté
        $user = Auth::user();
        // Vérifier si l'utilisateur est un étudiant et s'il a des notes associées
        if ($user->role === 'etudiant' && $user->etudiant) {
            // Récupérer les notes de l'étudiant connecté
            $etudiant = $user->etudiant;
            $notes = $etudiant->notes()->first(); // Modifier ici pour récupérer les notes

            // Passer les notes à la vue et retourner la vue
            return view('voirmesnote', compact('notes'));
        }

        // Rediriger ou afficher un message d'erreur si l'utilisateur n'est pas un étudiant ou s'il n'a pas de notes
        return redirect()->route('login')->withErrors(['error' => 'Vous devez être un étudiant pour accéder à cette fonctionnalité.']);
    }
    public function voirenotess()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Vérifier si l'utilisateur est un parent et s'il a des étudiants associés
        if ($user->role === 'parent' && $user->parents) {
            // Récupérer les étudiants associés au parent à partir de la table parents
            $etudiants = Parents::where('parent_id', $user->id)->with('etudiant')->get();

            // Initialiser un tableau pour stocker les notes des étudiants
            $notesEtudiants = [];

            // Boucler à travers chaque étudiant et récupérer leurs notes
            foreach ($etudiants as $etudiant) {
                // Récupérer les notes de l'étudiant
                $notes = Note::where('etudiant_id', $etudiant->etudiant->id)->first();

                // Stocker les notes dans un tableau associatif avec l'ID de l'étudiant comme clé
                $notesEtudiants[$etudiant->etudiant->id] = $notes;

            }

            // Passer les notes des étudiants à la vue et retourner la vue
            return view('voirnoteenfant', compact('notesEtudiants'));
        }

        // Rediriger ou afficher un message d'erreur si l'utilisateur n'est pas un parent ou s'il n'a pas d'enfants associés
        return redirect()->route('login')->withErrors(['error' => 'Vous devez être un parent pour accéder à cette fonctionnalité.']);
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
    public function Listeclasse(Request $request){
        $classeList =Classe::get();


        return view('Listeclasse', compact('classeList'));

    }
    public function saveNotes(Request $request)
    {
        foreach($request->notes as $index => $note) {
            $etudiantId = $request->etudiant_ids[$index];

            // Récupérer la matière pour laquelle les notes sont saisies
            $matiere = $request->matiere;

            // Mettre à jour ou créer une entrée de note pour l'étudiant et la matière
            $etudiantNotes = Note::updateOrCreate(
                ['etudiant_id' => $etudiantId],
                [$matiere => json_encode($note)]
            );
        }

        return redirect()->back()->with('success', 'Les notes ont été enregistrées avec succès.');
    }
    public function delete(User $student)
    {
        $student->delete();
        return redirect()->route('listEtudiants')->with('success', 'Étudiant supprimé avec succès.');
    }
    public function edit(User $user)
{
    return view('edit', compact('user'));
}


}




