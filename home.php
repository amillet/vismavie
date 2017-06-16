<form method="POST" action="signup.php"  style="text-align:center;">
<h1 style="margin-top:-10px;">Créer votre profil</h1>
    <div class="form_1" >
        <div class="form-group">
            <label for="prenom"></label>
            <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="inscription[prenom]">
        </div>
        <div class="form-group" style="margin-left:5%;">
            <label for="nom"></label>
            <input type="text" class="form-control" id="nom" placeholder="Nom" name="inscription[nom]">
        </div>
    </div>

    <div class="form-group" style="margin-top:25px;">
        <select class="form-control" id="poste" name="inscription[poste]">
            <option value="">Poste actuel...</option>
            <option value="Développeur">Développeur</option>
            <option value="Intégrateur">Intégrateur</option>
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" id="businessUnit" name="inscription[bu]">
            <option value="">Business Unit...</option>
            <option value="Juritravail">Juritravail</option>
            <option value="Wengo">Habitatpresto</option>
            <option value="RDVMedicaux">Bordas</option>
            <option value="RDVMedicaux">RDVMedicaux</option>
            <option value="Wengo">Wengo</option>
        </select>
    </div>

    <div class="form-group" style="margin-top:35px;">
        <label for="photo" style="font-weight: 400;">Une petite photo ?</label>
        <input type="file" id="photo" name="inscription[photo]">
    </div>

    <br />

    <button type="submit" class="btn btn-default">Créer</button>
</form>

<hr />

<center style="background:rgba(255,255,255,0.5);padding:15px 20px 20px;">
    <h2>Déja inscrit ?</h2>
    <br />
    <a href="" title="">Me connecter</a>
</center>
