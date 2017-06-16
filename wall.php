<div class="container" style="padding:0;">

    <!--<?php if(!($_SESSION['match_chat'])) : ?>-->
        <div id="chat-button" class="col-xs-12">
            <a href="index.php?page=chat">
                <img src="img/1.jpg" style="border-radius:100%; position:fixed;top:90px;right:-15px; z-index:999; width:75px; height:75px;box-shadow: 0px 0px 5px 1px rgba(0,0,0,.1);"/>
            </a>
        </div>
    <!--<?php endif; ?> <?php echo $_SESSION['match']['image']; ?>-->

    <!--
    <div id="display-input" style="display:none;padding:20px;background:#ffc900;margin-top:10px;box-shadow:1px 1px 5px rgba(0,0,0,.3);">
        <img src="img/mbp.png" width="40" alt="" style="float:left;margin:0 10px 20px 0;"/>
        <b style="font-size:16px;color:#333;">17:00 !</b> Il est temps de nous dire comment se passe votre journée... <br /><span style="text-decoration:underline;">Poster un commentaire<span>
    </div>

-->

    <form action="" id="form-msg" style="display: none;">
        <div class="form-group">
            <label for="exampleInputEmail1">Comment se passe votre journée ?</label>
            <textarea id="btn-msg" class="form-control" placeholder="Ecrivez quelque chose"></textarea>
        </div>
        <button id="btn-submit" type="submit" class="btn btn-default">Envoyer</button>
    </form>
    <ul class="timeline" id="timeline">
        <li>
            <div class="timeline-badge"><img src="/img/3.jpg"></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <!--<h4 class="timeline-title">Mussum ipsum cacilds</h4>-->
                    <p>Najla AMERE <small class="text-muted"><i class="glyphicon glyphicon-time"></i> il y a 10h</small></p>
                </div>
                <div class="timeline-body">
                    <!--<img src="http://www.communicationpsycom.com/wp-content/uploads/2014/09/img-entreprise-organisation-1000x500.jpg" class="img-rounded" style="width: 100%;">-->
                    <p>Une journée avec Louise, juriste je comprends mieux pourquoi les petites lignes ça compte ;)</p>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge"><a href="/index.php?page=profile"><img src="/img/2.jpg"></a></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <!--<h4 class="timeline-title">Mussum ipsum cacilds</h4>-->
                    <p><a href="/index.php?page=profile">Dounia IDHMIDA‎</a> <small class="text-muted"><i class="glyphicon glyphicon-time"></i> il y a 7h</small></p>
                </div>
                <div class="timeline-body">
                    <video width="100%" controls muted>
                       <source src="img/hack.mp4" type="video/mp4" autoplay="0">
                    </video>
                    <br /><br />
                    <p>Les techos sont les meilleurs !</p>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge"><img src="/img/4.jpg"></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <!--<h4 class="timeline-title">Mussum ipsum cacilds</h4>-->
                    <p>Morgane MATHILLON <small class="text-muted"><i class="glyphicon glyphicon-time"></i> il y a 5 jours</small></p>
                </div>
                <div class="timeline-body">
                    <p>Un petit tour au service commercial avec Mélaine afin de mieux comprendre toutes les offres !</p>
                </div>
            </div>
        </li>
        <li style="display:none" id="msg-proto">
            <div class="timeline-badge"><a href="/index.php?page=profile"><img src="/img/2.jpg"></a></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <!--<h4 class="timeline-title">Mussum ipsum cacilds</h4>-->
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> à l'instant</small></p>
                </div>
                <div class="timeline-body"></div>
            </div>
        </li>
    </ul>
</div>

<script type="text/javascript">
function displayNotification() {
    if ($('#chat-button').length <= 0) {
        var notification = $('#display-input');
        notification.slideDown(500);
        notification.click(function() {
            $(this).remove();
            $('#form-msg').slideDown(500);
        });
    }
}

$('#btn-submit').click(function(event) {
    event.preventDefault();
    var li = $("#msg-proto").clone();
    li.find('.timeline-body').html($('#btn-msg').val());
    $('#form-msg').fadeOut(1000, function() {
        li.prependTo('#timeline').fadeIn(1000);
    });
});
setTimeout(function() {
    displayNotification();
}, 4000);
</script>

<style type="text/css">
    .timeline {
        list-style: none;
        padding: 20px 0 20px;
        position: relative;
    }
    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 25px;
        margin-right: -1.5px;
    }
    .timeline > li {
        margin-bottom: 20px;
        position: relative;
    }
    .timeline > li a {
        text-decoration: none;
    }
    .timeline > li:before,
    .timeline > li:after {
        content: " ";
        display: table;
    }
    .timeline > li:after {
        clear: both;
    }
    .timeline > li:before,
    .timeline > li:after {
        content: " ";
        display: table;
    }
    .timeline > li:after {
        clear: both;
    }
    .timeline > li > .timeline-panel {
        width: calc( 100% - 75px );
        float: right;
        border: 1px solid #d4d4d4;
        border-radius: 2px;
        padding: 20px;
        position: relative;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        background: #fff;
    }
    .timeline > li > .timeline-panel:before {
        position: absolute;
        top: 26px;
        left: -15px;
        display: inline-block;
        border-top: 15px solid transparent;
        border-right: 15px solid #ccc;
        border-left: 0 solid #ccc;
        border-bottom: 15px solid transparent;
        content: " ";
    }
    .timeline > li > .timeline-panel:after {
        position: absolute;
        top: 27px;
        left: -14px;
        display: inline-block;
        border-top: 14px solid transparent;
        border-right: 14px solid #fff;
        border-left: 0 solid #fff;
        border-bottom: 14px solid transparent;
        content: " ";
    }
    .timeline > li > .timeline-badge {
        color: #fff;
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 1.4em;
        text-align: center;
        position: absolute;
        top: 16px;
        left: 0px;
        margin-right: -25px;
        z-index: 100;
    }
    .timeline > li > .timeline-badge > a > img,
    .timeline > li > .timeline-badge > img {
        width: 100%;
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
    }
    .timeline > li.timeline-inverted > .timeline-panel {
        float: left;
    }
    .timeline > li.timeline-inverted > .timeline-panel:before {
        border-right-width: 0;
        border-left-width: 15px;
        right: -15px;
        left: auto;
    }
    .timeline > li.timeline-inverted > .timeline-panel:after {
        border-right-width: 0;
        border-left-width: 14px;
        right: -14px;
        left: auto;
    }
    .timeline-badge.primary {
        background-color: #2e6da4 !important;
    }
    .timeline-badge.success {
        background-color: #3f903f !important;
    }
    .timeline-badge.warning {
        background-color: #f0ad4e !important;
    }
    .timeline-badge.danger {
        background-color: #d9534f !important;
    }
    .timeline-badge.info {
        background-color: #5bc0de !important;
    }
    .timeline-title {
        margin-top: 0;
        color: inherit;
    }
    .timeline-body > p,
    .timeline-body > ul {
        margin-bottom: 0;
    }
    .timeline-body > p + p {
        margin-top: 5px;
    }
</style>