<div class="container">
    <form action="" id="form-msg" style="display: none;">
        <div class="form-group">
            <label for="exampleInputEmail1">Comment se passe votre journée ?</label>
            <textarea id="btn-msg" class="form-control" placeholder="Ecrivez quelque chose"></textarea>
        </div>
        <button id="btn-submit" type="submit" class="btn btn-default">Envoyer</button>
    </form>
    <ul class="timeline" id="timeline">
        <li>
            <div class="timeline-badge"><img src=""></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <!--<h4 class="timeline-title">Mussum ipsum cacilds</h4>-->
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> il y a 15 minutes</small></p>
                </div>
                <div class="timeline-body">
                    <img src="http://www.communicationpsycom.com/wp-content/uploads/2014/09/img-entreprise-organisation-1000x500.jpg" class="img-rounded" style="width: 100%;">
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                </div>
            </div>
        </li>
        <li>
            <div class="timeline-badge"><img src=""></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <!--<h4 class="timeline-title">Mussum ipsum cacilds</h4>-->
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> il y a 30 minutes</small></p>
                </div>
                <div class="timeline-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/GNYa0O8VYRg" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </li>
        <li style="display:none" id="msg-proto">
            <div class="timeline-badge"><img src=""></div>
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
$('#btn-submit').click(function(event) {
    event.preventDefault();
    var li = $("#msg-proto").clone();
    li.find('.timeline-body').html($('#btn-msg').val());
    $('#form-msg').fadeOut(1000, function() {
        li.prependTo('#timeline').fadeIn(1000);
    });
});
setTimeout(function() {
    $('#form-msg').slideDown(500);
}, 2000);
/*setTimeout(function() {
    $('#timeline > li:first').slideDown(500);
}, 2000);*/
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
        background-color: #999999;
        z-index: 100;
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