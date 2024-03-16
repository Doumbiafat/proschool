<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile Etudiant</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #222;
        color: #fff;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background: linear-gradient(to right, #007bff, #fd7e14);
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }
    h1 {
        margin-bottom: 20px;
        text-align: center;
    }
    .info {
        margin-bottom: 10px;
    }
    label {
        font-weight: bold;
    }
    .btn {
        display: inline-block;
        padding: 8px 20px;
        margin-top: 20px;
        background-color: #17a2b8;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .yo{
        display: flex;

    }
    .yo a{
     margin-right: 50px;
     margin-left: 50px;
       justify-content: center;

    }
    .btn:hover {
        background-color: #138496;
    }
</style>
</head>


<body>
    <div class="container">
        <h1>Profile de {{ $user->name }}</h1>
        <p><strong>Nom:</strong> {{ $user->name }}</p>
        <p><strong>Prénom:</strong> {{ $user->prenom }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Rôle:</strong> {{ $user->role }}</p>
        <p>
            <strong>
            @if($user->role === 'etudiant' && $user->etudiant)
                Matricule:</strong> {{ $user->etudiant->matricule }}
            @else
                N/A
            @endif

        </p>
        <p><strong>Classe:</strong> {{ $user->etudiant ? ($user->etudiant->classe ? $user->etudiant->classe->libelle : 'Non définie') : 'Non définie' }}</p>
        <p><strong>Date d'inscription:</strong> {{ $user->created_at }}</p>
        <div class="yo">

            <a href="{{ route('logout') }}" class="btn">Déconnexion</a>
            <a href="#" class="btn">Modifier</a>
            <a href="/voirnote" class="btn">notes</a>
        </div>
    </div>
</body>
</body>
</html>
