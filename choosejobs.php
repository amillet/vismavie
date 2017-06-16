<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<h1>Je veux découvrir...</h1>

<form action="index.php?page=matchme" method="post" style="text-align:center;">
    <br />
    <div class="form-group">
        <!--<label for="exampleInputEmail1">...</label>-->
        <select class="js-example-basic-multiple" multiple="multiple" class="form-control" style="width:100%;" name="poste">
            <optgroup label="Administration">
            <option value="4">Comptable<option>
            <option value="5">Assistant de direction<option>
            <option value="7">Direction administrative<option>
            <optgroup label="Editorial">
            <option value="8">Rédacteur web<option>
            <optgroup label="Gestion / management">
            <option value="6">Chef de produit<option>
            <option value="2">Chef de projet</option>
            <optgroup label="Technique">
            <option value="1">Développeur web</option>
            <option value="3">Intégrateur web </option>
        </select>
    </div>
    <br /><br />
    <button type="submit" class="btn btn-default">C'est parti !</button>
</form>


<script type="text/javascript">
$(".js-example-basic-multiple").select2({
    theme: "classic"
});
</script>