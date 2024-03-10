<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* Fond clair */
            color: #333; /* Texte plus sombre */
            margin: 0;
            padding: 0;
            text-align: left; /* Alignement à gauche */
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(to right, #007bff, #fd7e14); /* Gradient orange-bleu */
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        h1 {
            margin-bottom: 20px;
            color: #fff; /* Texte blanc */
        }

        p {
            margin-bottom: 10px;
        }

        a {
            display: inline-block;
            padding: 8px 20px;
            margin-top: 20px;
            background-color: #17a2b8; /* Bleu */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #138496; /* Bleu foncé */
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

        <a href="{{ route('logout') }}">Déconnexion</a>
    </div>
</body>

</html>
