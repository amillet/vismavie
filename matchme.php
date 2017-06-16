<?php
    if (isset($_SESSION['prenom'], $_SESSION['nom'], $_SESSION['poste'])) {
        function getMatch($job) {
            global $users;
            foreach ($users as $user) {
                if ($user['poste'] == $job) {
                    return $user;
                }
            }
            return null;
        }
        $match = getMatch($_SESSION['poste']);

        if (!$match) {
            //TODO : change redirect to wall page
    //        header('Location: /');
    //        exit;
        }
    }
?>

<div class="row">
    <h1 class="text-center">It's match !</h1>
</div>
<br />
<br />
<div class="row matching">
    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-12 text-center">
                <img src="/img/2.jpg" width="110" height="110" style="border-radius: 100%;box-shadow: 1px 2px 3px rgba(0,0,0,0.3)"/>
                <br />
                <br />
                <p style="color:#000;margin-bottom:5px;"><b>Dounia IDHMIDA</b></p>
                <p>Chef produit<br />(Bordas)</p>
                <?php //echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ?>
                <?php //echo $_SESSION['poste'] ?>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-12 text-center">
                <img src="/img/1.jpg" width="110" height="110" style="border-radius: 100%;box-shadow: 1px 2px 3px rgba(0,0,0,0.3)"/>
                <br />
                <br />
                <p style="color:#000;margin-bottom:5px;"><b>David BITTON</b></p>
                <p>Directeur général<br />(MyBestPro)</p>
                <?php //echo $match['image'] ?>
            </div>
        </div>
        <br style="clear:both;"/>
    </div>
</div>
<br />
<br />
<div class="row">
    <div class="col-xs-12">
        <center>
            <a href="index.php?page=chat" title="" target="_blank" class="btn btn-primary">On discute ?</a>
        </center>
        <br />
        <br />
        <br />
        <center style="background:rgba(255,255,255,0.5);padding:15px 20px 20px;">
            <a href="#" target="_blank">Valider plus tard</a>
        </center>
    </div>
</div>

