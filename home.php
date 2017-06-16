<form method="POST" action="signup.php">
    <div class="form-group">
        <label for="prenom"></label>
        <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="inscription[prenom]">
    </div>
    <div class="form-group">
        <label for="nom"></label>
        <input type="text" class="form-control" id="nom" placeholder="Nom" name="inscription[nom]">
    </div>
    <div class="form-group">
        <label for="businessUnit">Business Unit</label>
        <select class="form-control" id="businessUnit" name="inscription[bu]">
            <option value="Wengo">Wengo</option>
            <option value="Juritravail">Juritravail</option>
            <option value="RDVMedicaux">RDVMedicaux</option>
        </select>
    </div>
    <div class="form-group">
        <label for="poste">Poste</label>
        <select class="form-control" id="poste" name="inscription[poste]">
            <option value="Développeur">Développeur</option>
            <option value="Intégrateur">Intégrateur</option>
        </select>
    </div>
    <div class="form-group">
        <label for="photo">Photo de profil</label>
        <input type="file" id="photo" name="inscription[photo]">
    </div>

    <input type="submit" class="btn btn-default" value="OK">
</form>

<hr />
<a href="#" class="btn btn-default">Connexion</a>