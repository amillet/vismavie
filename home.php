<form method="POST" action="index.php?page=signup"  style="text-align:center;">
<h1>Créer votre profil</h1>
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
        <select class="form-control" name="inscription[poste]">
            <optgroup label="Administration">
            <option value="9">Directeur général</option>
            <option value="4">Comptable</option>
            <option value="5">Assistant de direction</option>
            <option value="7">Direction administrative</option>
            <optgroup label="Editorial">
            <option value="8">Rédacteur web</option>
            <optgroup label="Gestion / management">
            <option value="6">Chef de produit</option>
            <option value="2">Chef de projet</option>
            <optgroup label="Technique">
            <option value="1">Développeur web</option>
            <option value="3">Intégrateur web </option>
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
        <input type="file" id="photo" name="inscription[image]">
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
