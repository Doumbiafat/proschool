<form method="POST" action="/register">
    @csrf

    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" required>
    </div>


    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="role">Je suis</label>
        <select name="role" id="role">
            <option value="etudiant">Étudiant</option>
            <option value="enseignant">Enseignant</option>
            <option value="professeur">Professeur</option>
        </select>
    </div>

    <button type="submit">S'inscrire</button>
</form>

