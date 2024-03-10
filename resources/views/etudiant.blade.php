<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil Etudiant</title>
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
    .btn:hover {
        background-color: #138496;
    }
</style>
</head>
<body>
<a href="/logout">se deconnecter</a>
<a href="/profile">profile</a>
<div class="container">
    <h1>Profil Etudiant</h1>
    <div class="info">
        <label for="nom">Nom:</label>
        <span id="nom">Doe</span>
    </div>
    <div class="info">
        <label for="prenom">Prénom:</label>
        <span id="prenom">John</span>
    </div>
    <div class="info">
        <label for="filiere">Filière:</label>
        <span id="filiere">Informatique</span>
    </div>
    <div class="info">
        <label for="niveau">Niveau:</label>
        <span id="niveau">Licence 3</span>
    </div>
    <div class="info">
        <label for="annee">Année Universitaire:</label>
        <span id="annee">2023/2024</span>
    </div>
    <div class="info">
        <label for="email">Email:</label>
        <span id="email">john.doe@example.com</span>
    </div>
    <div class="info">
        <label for="date_naissance">Date de Naissance:</label>
        <span id="date_naissance">01/01/2000</span>
    </div>
    <a href="#" class="btn">Modifier</a>
</div>
</body>
</html>
