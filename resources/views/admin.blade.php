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
<a href="/profile">profile</a>
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
                <option value="admin">Admin</option>
            </select>

            <!-- Champ de saisie pour la matière, visible uniquement si le rôle sélectionné est "enseignant" -->
            <select name="matiere" id="matiere">
                <option value="math">Mathématiques</option>
                <option value="anglais">Anglais</option>
                <option value="physique">Physique</option>
            </select>
            <div id="matriculeField" style="display: none;">
                <input type="text" name="matricule" id="matricule" placeholder="Matricule" required>
            </div>

              <button type="submit">inscrire</button>


          </form>

        </div>
      </section>
      <script>
        document.getElementById('role').addEventListener('change', function() {
            var role = this.value;
            var matriculeField = document.getElementById('matriculeField');

            if (role === 'etudiant') {
                matriculeField.style.display = 'block';
                document.getElementById('matricule').required = true;
            } else {
                matriculeField.style.display = 'none';
                document.getElementById('matricule').required = false;
            }
        });
    </script>

</body>
</html>
