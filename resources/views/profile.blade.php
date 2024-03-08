<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Profile de {{ $user->name }}</h1>
    <p>Nom: {{ $user->name }}</p>
    <p>Prénom: {{ $user->prenom }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Rôle: {{ $user->role }}</p>

    <a href="{{ route('logout') }}">Déconnexion</a>
</body>
</html>
