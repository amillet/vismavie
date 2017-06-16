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
    <h1 class="text-center">It's a match...</h1>
</div>
<br>
<br>
<div class="row">
    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-12">
                <label class="col-xs-12 text-center"><?php //echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ?></label>
                <label class="col-xs-12 text-center"><?php //echo $_SESSION['poste'] ?></label>
                <div class="col-xs-12 text-center">
                    <img src="/img/<?php //echo $_SESSION['image'] ?>" width="100" height="100" />
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-12">
                <label class="col-xs-12 text-center"><?php //echo $match['prenom'] . ' ' . $_SESSION['nom']; ?></label>
                <label class="col-xs-12 text-center"><?php //echo $match['poste']; ?></label>
                <div class="col-xs-12 text-center">
                    <img src="/img/<?php //echo $match['image'] ?>" width="100" height="100" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <a href="index.php?page=chat" target="_blank" class="btn btn-block btn-primary">DISCUTER</a>
    </div>
    <div class="col-xs-12 text-center">
        <a href="#" target="_blank">Revoir plus tard</a>
    </div>
</div>

