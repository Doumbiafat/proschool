<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/sa.css') }}">
    <title>Document</title>
</head>

<body>

    <section class="ins" id="ins">
        <div class="box">
          <span class="borderLine"></span>
          <form method="POST" action="/login" >
            @csrf
              <h2>Sign in</h2>
              <div class="inputBox">
                  <input type="email"name="email" id="email" required>
                  <span>email</span>
                  <i></i>

              </div>
              <div class="inputBox">
                  <input type="password" name="password" id="password" required>
                  <span>mot de pass</span>
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




              <button type="submit">Se connecter</button>


          </form>

        </div>
      </section>


</body>
</html>


