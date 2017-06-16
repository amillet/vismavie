<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 user-details">
            <div class="user-image">
                <img src="/img/2.jpg" alt="" title="" class="img-circle" style="width: 100px;">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3>Dounia IDHMIDA‎</h3>
                    <span class="help-block"><?php echo $jobsList[$_SESSION['poste']]; ?></span>
                </div>
                <ul class="navigation">
                    <li class="active">
                        <a data-toggle="tab" href="#information">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#email">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#events">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#settings">
                            <span class="glyphicon glyphicon-cog"></span>
                        </a>
                    </li>
                </ul>
                <div class="user-body">
                    <div class="tab-content">
                        <ul class="timeline" id="timeline">
                            <li>
                                <div class="timeline-badge"><img src="/img/2.jpg"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <!--<h4 class="timeline-title">Mussum ipsum cacilds</h4>-->
                                        <p>Dounia IDHMIDA‎ <small class="text-muted"><i class="glyphicon glyphicon-time"></i> il y a 7h</small></p>
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
                                <div class="timeline-badge"><img src="/img/2.jpg"></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <!--<h4 class="timeline-title">Mussum ipsum cacilds</h4>-->
                                        <p>Dounia IDHMIDA‎ <small class="text-muted"><i class="glyphicon glyphicon-time"></i> il y a 8h</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <!--<img src="http://www.communicationpsycom.com/wp-content/uploads/2014/09/img-entreprise-organisation-1000x500.jpg" class="img-rounded" style="width: 100%;">-->
                                        <p>Une journée avec Myriam :-O</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
.user-details {
    position: relative;
    padding: 0;
}
.user-details .user-image {
    position: relative;
    z-index: 1;
    width: 100%;
    text-align: center;
}
.user-image img {
    clear: both;
    margin: auto;
    position: relative;
}
.user-details .user-info-block {
    width: 100%;
    position: absolute;
    top: 55px;
    background: rgb(255, 255, 255);
    z-index: 0;
    padding-top: 35px;
}
.user-info-block .user-heading {
    width: 100%;
    text-align: center;
    margin: 10px 0 0;
}
.user-info-block .navigation {
    float: left;
    width: 100%;
    margin: 0;
    padding: 0;
    list-style: none;
}
.navigation li {
    float: left;
    margin: 0;
    padding: 0;
}
.navigation li a {
    padding: 20px 28px;
    float: left;
}
.navigation li.active a {
    background: #333;
    color: #fff;
}
.user-info-block .user-body {
    float: left;
    padding: 5%;
    width: 90%;
}
.user-body .tab-content > div {
    float: left;
    width: 100%;
}
.user-body .tab-content h4 {
    width: 100%;
    margin: 10px 0;
    color: #333;
}
</style>

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
        z-index: 100;
    }
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