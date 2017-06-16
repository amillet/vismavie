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

    $_SESSION['match_chat'] = false;
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
                <img id="match_img" src="/img/<?php echo $match['image']; ?>" width="135" height="135" style="border-radius: 100%;box-shadow: 1px 2px 4px rgba(0,0,0,0.3);" class="rotate" />
                <br />
                <br />
                <p id="match_name" style="color:#000;margin-bottom:5px;height:20px;"></p>
                <p id="match_job" style="height:40px;"></p>
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
            <a href="?page=wall">Valider plus tard</a>
        </center>
    </div>
</div>

<script type="text/javascript" src="/js/typed.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(){
      Typed.new('#match_name', {
        strings: ["<b><?php echo $match['prenom'] . ' ' . $match['nom']; ?></b>"],
        typeSpeed: 10,
        showCursor: false,
        contentType: 'html',
        callback: function() {
            Typed.new('#match_job', {
                strings: ["<?php echo $jobsList[$match['poste']]; ?><br />(<?php echo $match['bu']; ?>)"],
                typeSpeed: 10,
                showCursor: false,
                contentType: 'html',
                callback: function() {

                },
            });
        },
      });
  });
</script>

<style type="text/css">
.rotate {
    background-color: green;
    -webkit-animation: spin 2s linear;
}

@-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    10% { -webkit-transform: rotate(360deg); }
    20% { -webkit-transform: rotate(720deg); }
    40% { -webkit-transform: rotate(1080deg); }
    70% { -webkit-transform: rotate(1440deg); }
    100% { -webkit-transform: rotate(1800deg); }
}
</style>