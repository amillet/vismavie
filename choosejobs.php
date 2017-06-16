<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<h1>Je veux découvrir...</h1>

<form action="index.php?page=..." method="post" style="text-align:center;">
    <div class="form-group">
        <label for="exampleInputEmail1">...</label>
        <select class="js-example-basic-multiple" multiple="multiple" class="form-control" style="width: 100%;">
            <option value="1">Développeur</option>
            <option value="2">Chef de projet</option>
            <option value="3">Intégrateur</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default">C'est parti !</button>
</form>


<script type="text/javascript">
$(".js-example-basic-multiple").select2({
    theme: "classic"
});
</script>