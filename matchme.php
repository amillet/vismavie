<?php
    if (!isset($_SESSION['prenom'], $_SESSION['nom'], $_SESSION['poste'])) {
        header('Location: /');
        exit;
    }
    function getMatch($jobs, $users) {
        foreach ($users as $user) {
            foreach($jobs as $job) {
                if ($user['poste'] == $job) {
                    return $user;
                }
            }
        }
        return null;
    }

    $jobs = isset($_POST['poste']) ? (is_array($_POST['poste']) ? $_POST['poste'] : array($_POST['poste'])) : array();
    $match = getMatch($jobs, $users);

    if (!$match) {
        //TODO : change redirect to wall page
        header('Location: /');
        exit;
    }

    $_SESSION['match'] = $match;
?>

<div class="row">
    <h1 class="text-center">Je suis votre paire !</h1>
</div>
<br />
<br />
<div class="row matching">
    <div class="col-xs-12">
        <div class="col-xs-5">
            <div class="text-center">
                <img src="/img/<?php echo $_SESSION['image'] ?>" width="80" height="80" style="border-radius: 100%;box-shadow: 1px 1px 1px rgba(0,0,0,0.3)"/>
                <br />
                <br />
                <p style="color:#000;margin-bottom:5px;"><b><?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ?></b></p>
            </div>
        </div>
        <div class="col-xs-7">
            <div class="col-xs-12 text-center">
                <img src="/img/<?php echo $match['image']; ?>" width="135" height="135" style="border-radius: 100%;box-shadow: 1px 2px 4px rgba(0,0,0,0.3)"/>
                <br />
                <br />
                <p style="color:#000;margin-bottom:5px;"><b><?php echo $match['prenom'] . ' ' . $match['nom']; ?></b></p>
                <p><?php echo $jobsList[$match['poste']]; ?><br />(<?php echo $match['bu']; ?>)</p>
            </div>
        </div>
        <br style="clear:both;"/>
    </div>
</div>
<br />
<div class="row">
    <div class="col-xs-12">
        <center>
            <a href="index.php?page=chat" title="" class="btn btn-primary">On discute ?</a>
        </center>
        <br />
        <br />
        <br />
        <center style="background:rgba(255,255,255,0.5);padding:15px 20px 20px;">
            <a href="#">Valider plus tard</a>
        </center>
    </div>
</div>