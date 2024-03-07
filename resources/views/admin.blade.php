<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/saa.css') }}">
    <title>Document</title>
</head>
<body>
<a href="/logout">se deconnecter</a>
    <section class="ins" id="ins">
        <div class="box">
          <span class="borderLine"></span>
          <form method="POST" action="/register" >
            @csrf
            <h2>Inscrire</h2>
            <div class="inputBox">
                <input type="name"name="name" id="name" required>
                <span>nom</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="prenom"name="prenom" id="prenom" required>
                <span>prenom</span>
                <i></i>
            </div>


              <div class="inputBox">
                  <input type="email"name="email" id="email" required>
                  <span>email</span>
                  <i></i>

              </div>
              <div class="inputBox">
                  <input type="password" name="password" id="password" required>
                  <span>mot de passe</span>
                  <i></i>

              </div>
              <div class="links">
                  <a href="#">dites-nous tous</a>
                  <!--a href="inscription.php">s'inscrire</a-->
              </div>

              <select select name="role" id="role">
                  <option value="etudiant">Étudiant</option>
                  <option value="enseignant">Enseignant</option>
                  <option value="professeur">Professeur</option>

              </select>

              <button type="submit">inscrire</button>


          </form>

        </div>
      </section>


</body>
</html>
