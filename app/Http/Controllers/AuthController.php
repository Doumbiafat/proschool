<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom'=> 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:etudiant,enseignant,admin'
        ]);

        $user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

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

        // Vérifier le rôle et rediriger en conséquence
        if (auth()->user()->role === 'etudiant') {
            $token = $user->createToken('auth_token')->plainTextToken;
            return view('etudiant', compact('user'));
        } elseif (auth()->user()->role === 'enseignant') {
            $token = $user->createToken('auth_token')->plainTextToken;
              return view('enseignant', compact('user'));

        } elseif (auth()->user()->role === 'admin') {
            $token = $user->createToken('auth_token')->plainTextToken;
            return view('admin', compact('user'));
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
}


