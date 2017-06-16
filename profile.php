<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 user-details">
            <div class="user-image">
                <img src="/img/2.jpg" alt="" title="" class="img-circle" style="width: 100px;">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <h3><?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?></h3>
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
                        ....
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
    border-bottom: 1px solid #428BCA;
    border-top: 1px solid #428BCA;
}
.navigation li {
    float: left;
    margin: 0;
    padding: 0;
}
.navigation li a {
    padding: 20px 30px;
    float: left;
}
.navigation li.active a {
    background: #428BCA;
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