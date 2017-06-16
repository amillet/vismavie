<?php
    $_SESSION['match_chat'] = true;
?>

<div class="davidbitton">
    <p>Vous discutez avec :</p>
    <img src="img/1.jpg" alt="" />
    <h1 style="display: inline-block;">David Bitton</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <!--<div class="panel-heading" id="accordion">
                <span class="glyphicon glyphicon-comment"></span> Chat
            </div>-->
            <div class="panel-collapse" id="collapseOne">
                <div class="panel-body">
                    <ul class="chat" id ="msg"></ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Saisissez votre message ici..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat" style="color: #333;background: #ccc;border:0;height: 40px;font-size:16px;"><span class="glyphicon glyphicon-send"></span></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <center style="padding:15px 20px 20px;max-width:90%;margin:auto;">
            <a href="/index.php?page=wall" title="" class="btn btn-primary" style="padding:16px 20px;font-weight:500;color:#333;background:#ffc900;"> Ma journée commence !</a>
        </center>
    </div>
</div>
<!--<img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />-->
<script type="text/javascript">
function pushMsgLeft(msg) {
    var msg = '<li class="left clearfix">'
        + '<span class="chat-img pull-left glyphicon glyphicon-user glyphicon"></span>'
        + '<div class="chat-body clearfix">'
        + '    <div class="header">'
        + '        <strong class="primary-font"><?php echo $_SESSION['match']['prenom']; ?></strong> <small class="pull-right text-muted">'
        + '        </small>'
        + '    </div>'
        + '    <p>'+msg+'</p>'
        + '</div>'
        + '</li>';
    $('#msg').append(msg);
}
function pushMsgRight(msg) {
    var msg = '<li class="right clearfix">'
        + '<span class="chat-img pull-right glyphicon glyphicon-user glyphicon" style="color:#ffc900;"> </span>'
        + '<div class="chat-body clearfix">'
        + '    <div class="header">'
        + '        <small class=" text-muted"><span class="glyphicon"></span></small>'
        + '        <strong class="pull-right primary-font"><?php echo $_SESSION['prenom']; ?></strong>'
        + '    </div>'
        + '    <p>'+msg+'</p>'
        + '</div>'
        + '</li>';
    $('#msg').append(msg);
}
var c = 0;
$('#btn-chat').click(function(){
    pushMsgRight($('#btn-input').val());
    c++;
    $('#btn-input').val('');
    if(c == 1) {
        setTimeout(function() {
            pushMsgLeft('votre démo se passe bien ?');
        }, 1750);
    }
});

setTimeout(function() {
    pushMsgLeft('Hey');
    setTimeout(function() {
        pushMsgLeft('ça va ?');
    }, 1000);
}, 2000);
</script>

<style type="text/css">
.chat
{
    list-style: none;
    margin: 0;
    padding: 0;
}

.chat li
{
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #B3A9A9;
}

.chat li.left .chat-body
{
    margin-left: 30px;
}

.chat li.right .chat-body
{
    margin-right: 30px;
}


.chat li .chat-body p
{
    margin: 0;
    color: #777777;
}

.panel .slidedown .glyphicon, .chat .glyphicon
{
    margin-right: 5px;
}

.panel-body
{
    overflow-y: auto;
    height: 225px;
}

::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}

</style>