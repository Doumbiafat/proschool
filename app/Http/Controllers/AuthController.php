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
            'role' => 'required|in:etudiant,enseignant'
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

        // Recherche de l'utilisateur par email
        $user = User::where('email', $request->email)->first();

        // Vérifier si l'utilisateur existe
        if ($user) {
            // Vérifier le mot de passe
            if (password_verify($request->password, $user->password)) {
                // Vérifier le rôle
                if ($user->role === $request->role) {
                      // Créer un jeton d'authentification pour l'utilisateur API
                    $token = $user->createToken('auth_token')->plainTextToken;
                    if ($user->role === 'etudiant') {
                        return redirect()->route('etudiant');
                    } elseif ($user->role === 'enseignant') {
                        return redirect()->route('enseignant');
                    }elseif ($user->role === 'admin') {
                        return redirect()->route('admin');
                    } else {
                        return response()->json([
                            "status" => 0,
                            "message" => "Rôle non valide"
                        ]);
                    }


                    // Authentification réussie
                   /* return response()->json([
                        "status" => 1,
                        "message" => "Connexion réussie",
                        "access_token" => $token
                    ]);*/
                     // Vérifier le rôle et rediriger en conséquence
                } else {
                    // Rôle incorrect
                    return response()->json([
                        "status" => 0,
                        "message" => "Rôle incorrect"
                    ]);
                }
            } else {
                // Mot de passe incorrect
                return response()->json([
                    "status" => 0,
                    "message" => "Mot de passe incorrect"
                ]);
            }
        } else {
            // Utilisateur non trouvé
            return response()->json([
                "status" => 0,
                "message" => "Utilisateur introuvable"
            ], 404);
        }
    }

    public function logout(Request $request)
    {
        Auth::user()->tokens()->delete();

        return response()->json([
            "status" => 0,
            "message"=> "deconnection reussie",

        ]);


    }

}


