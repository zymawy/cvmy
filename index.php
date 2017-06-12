<?php 
require 'init.php';
$langType = "en";

 $class = $langType == 'en' ? 'introEn' : '';
?>
    
<!DOCTYPE html>
<html lang="<?php echo lang('HTMLLANG')?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Changa:500">
    <link rel="stylesheet" href="layout/css/app.css">
    <link rel="stylesheet" href="layout/css/jquery.fancybox.css">
    <link rel="stylesheet" href="layout/css/font-awesome.min.css">
    <link rel="stylesheet" href="layout/css/animate.css">
    <link rel="stylesheet" href="layout/css/redEn_theme.css">
    <link rel="stylesheet" href="layout/css/frontendEn.css">
    
    <title> <?php echo lang('TITLE')?> </title>
</head>
<style>
    .colorOption li {
        cursor: pointer
    }

</style>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="app">
                <ul class="nav navbar-nav">
                    <li >
                        <a data-scroll href="#aboutMe">
                            <?php echo lang('ABOUT') ?> </a>
                    </li>
                    <li>
                        <a data-scroll href="#experince">
                            <?php echo lang('EXPERINCE') ?> </a>
                    </li>
                    <li>
                        <a data-scroll href="#mySkill">
                            <?php echo lang('SKILL') ?> </a>
                    </li>
                    <li>
                        <a data-scroll href="#school">
                            <?php echo lang('EDUCATIONAL') ?> </a>
                    </li>
                </ul>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="nav navbar-nav navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php echo lang('THEME') ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu colorOption">
                                    <li data-value='layout/css/redEn_theme.css'><a><i class="fa  fa-fw"></i> </a></li>
                                    <li data-value='layout/css/greenEn_theme.css'><a><i class="fa  fa-fw"></i></a></li>
                                    <li data-value='layout/css/blueEn_theme.css'><a><i class="fa  fa-fw"></i></a></li>
                                    <li data-value='layout/css/yellowEn_theme.css'><a><i class="fa  fa-fw"></i></a></li>
                                </ul>
                            </li>
                            <li class="dropdown" data-wow-delay="1.5s" class="wow text slideInRight animated">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php echo lang('LANGUAGES') ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="ar/index.php" > 
                                            <?php echo lang('ARABIC')?> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../en/index.php" >
                                            <?php echo lang('ENGLISH') ?>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Start Heading  -->
    <header id="resize" class="header">

        <div class="container">
            <div class="jumbotron ">
                <div id="particles-js"></div>
                <div class="">
                    <h4 class="welcomeTitle text">
                    <?php echo lang('WLECOME') ?>
                </h4>
                <h3 data-wow-iteration="infinite" data-wow-delay="2s" data-wow-duration="5s" class="wow pulse title-main text">
                    <?php echo lang('READY') ?>
                </h3>
                <p>
                    <span class="<?php echo $class ; ?> text"> ></span>
                </p>
               </div>
                <a class="wow fadeInDown animated" data-wow-delay="1s" data-wow-duration="2s" data-wow-iteration="infinite" data-scroll href="#aboutMe"> <i class="fa fa-arrow-circle-down"></i></a>
                </div>
        </div>
        <span class="clearfix"></span>

    </header>
    <!-- End Heading  -->
    <!-- Start About Me -->
    <div class="aboutMe">
        <div class="container">
            <div class="content">
                <div class="col-md-8 text-center">
                    <h4 data-wow-offset="200" class="wow text fadeInDown animated title" id="aboutMe">
                        <?php echo lang('ABOUT') ?> </h4>
                    <hr class="wow fadeInDown animated" data-wow-offset="200" data-wow-delay="1s" data-wow-duration="2s" />
                    <p data-wow-delay="1s" data-wow-duration="2s" class="about wow fadeInDown animated text">
                        <?php echo lang('HOWIM') ?>
                    </p>

                    <h4 data-wow-duration="2s" class="wow slideInUp animated text-center title">
                        <?php echo lang('CONTECTVIA')?> </h4>
                    <ul class="list-unstyled">
                        <li>
                            <label class="wow text slideInRight animated"><i class="fa fa-mobile fa-fw z"></i> <?php echo lang('VIAPHONE') ?> :</label>
                            <span data-wow-delay="1s" class="pull-left wow slideInRight animated text"> <?php echo lang('MOBILE')?> </span>
                        </li>
                        <li>
                            <label class="wow slideInRight animated text"><i class="fa fa-envelope-square fa-fw"></i>  <?php echo lang('VIAEMAIL') ?> :</label>
                            <span data-wow-delay="1s" class="pull-left wow slideInRight animated text"> <?php echo lang('EMAIL')?> </span>
                        </li>
                        <li>
                            <label class=" wow text slideInRight animated"><i class="fa fa-map-marker fa-fw"></i> <?php echo lang('VIAADDRESS') ?>:</label>
                            <span data-wow-delay="1s" class="pull-left wow text slideInRight animated"> 
                             <?php echo lang('RESDINT')?>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 side-img">
                    <img data-wow-duration="2s" src="layout/img/gentleman.jpg" alt="" class=" wow slideInRight animated img-responsive" />
                    <ul class="list-unstyled ">
                        <li class="wow text slideInRight animated">
                            <i class="fa fa-user fa-fw fa-lg"></i>
                            <?php echo lang('FULLNAME') ?> </li>
                        <li class="wow text slideInLeft animated">
                            <i class="fa fa-map-marker fa-fw fa-lg"></i>
                            <?php echo lang('HOMEBIRTH')?> </li>
                        <li class="wow slideInRight text animated">
                            <i class="fa fa-birthday-cake fa-fw fa-lg"></i>
                            <?php echo lang('BIRTH')?> </li>
                    </ul>
                    <div class="socail">
                        <a id="facebook" href="https://www.facebook.com/Hamza7Hz"><i class="fa fa-facebook fa-fw wow slideInRight animated" data-wow-delay="0.5s" target="_blank"></i>
                            </a>
                        <a id="twitter" href="https://twitter.com/RttCy"><i class="fa fa-twitter fa-fw wow bounceInUp animated" data-wow-delay="1s"></i>
                            </a>
                        <a id="instagram" href="https://www.instagram.com/gw8"><i class="fa fa-instagram fa-fw wow bounceInUp animated" data-wow-delay="1.5s"></i>
                            </a>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Me  -->
    <!-- Start My Experince  -->
    <div class="experince">
        <div class="container">
            <h3 id="experince" data-wow-offset="200" class="wow fadeInDown animated text-center title">
                <?php echo lang('EXPERINCE') ?> </h3>
            <hr class="wow fadeInDown animated" />
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default wow slideInRight animated" data-wow-delay="0.5s">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo lang('TITLEEXP') ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <?php echo lang('BODYEXP')?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default wow slideInRight animated" data-wow-delay="1s">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <?php echo lang('TITLEEXP1') ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <?php echo lang('BODYEXP1')?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default wow slideInRight animated" data-wow-delay="1.5s">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <?php echo lang('TITLEEXP2') ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <?php echo lang('BODYEXP2')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End My Experince  -->
    <!-- Start My Skill -->
    <div class="mySkill">
        <div class="container">
            <h1 data-wow-offset="200" data-wow-duration="2s" class="wow fadeInDown animated text-center title" id="mySkill">
                <?php echo lang('SKILL')?> </h1>
            <hr class="wow fadeInDown animated" data-wow-offset="200" data-wow-delay="1s" data-wow-duration="2s" />
            <div class="row">
                <div class="wow fadeInDown animated col-md-4">
                    <div class="box text-center php">
                        <h3> PHP + MYSQL </h3>
                        <img src="layout/img/php.png" class="img-responsive" alt="php" />
                        <span class="result">
                                    <span class="count">70</span>%
                        </span>
                    </div>
                </div>
                <div data-wow-delay="1s" class="wow fadeInDown animated col-md-4">
                    <div class="box text-center html">
                        <h3> HTML + Bootstrip </h3>
                        <i class="fa fa-html5 fa-fw "></i>
                        <span class="result">
                                    <span class="count">95</span>%
                        </span>
                    </div>
                </div>
                <div data-wow-delay="1s" class="wow fadeInDown animated col-md-4">
                    <div class="box text-center laravel">
                        <h3> Laravel </h3>
                        <img src="layout/img/laravel.png" alt="Laravel" />
                        <span class="result">
                                    <span class="count">40</span>%
                        </span>
                    </div>
                </div>
                <div data-wow-delay="1s" class="wow fadeInDown animated col-md-4">
                    <div class="box text-center scss">
                        <h3> CSS + SCSS </h3>
                        <img src="layout/img/sass.png" alt="SCSS" />
                        <span class="result">
                                <span class="count">70</span>%
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start My Skill -->
    <!-- Start Carticfcit-->
    <div class="school">
        <div class="container">
            <h3 data-wow-offset="200" class="wow fadeInDown animated title text-center" id="school">
                <?php echo lang('EDUCATIONAL')?> </h3>
            <hr class="wow fadeInDown animated" />
            <div class="row">
                <div data-wow-delay="0.5s" class="wow slideInUp animated col-md-4">
                    <div class="box">
                        <a href="layout/img/htmls.png" data-fancybox="images" data-caption="<?php echo lang('CAPTIONHTML')?>">
                            <img class="img-responsive img-rounded" src="layout/img/htmls.png" alt="uqu">
                        </a>
                    </div>
                </div>
                <div data-wow-delay="1s" class="wow fadeInDown animated col-md-4">
                    <div class="box">
                        <a href="../layout/img/db.jpeg" data-fancybox="images" data-caption="<?php echo lang('CAPTIONDATABASE')?>">
                            <img id="db" class="img-responsive img-thumbnail" src="layout/img/db.jpeg" alt="database">
                        </a>
                    </div>
                </div>
                <div data-wow-delay="1.5s" class="wow fadeInDown animated col-md-4">
                    <div class="box">
                        <a href="layout/img/english.jpeg" data-fancybox="images" data-caption="<?php  echo lang('CAPTIONENGLISH')?>">
                            <img class="img-responsive img-thumbnail" src="layout/img/english.jpeg" alt="english">
                        </a>
                    </div>
                </div>
                <div data-wow-delay="2s" class="wow fadeInDown animated col-md-4">
                    <div class="box">
                        <a href="layout/img/introJave.jpeg" data-fancybox="images" data-caption="<?php echo lang('CAPTIONINTROJAVA')?>">
                            <img class="img-responsive img-thumbnail" src="layout/img/introJave.jpeg" alt="introJave">
                        </a>
                    </div>
                </div>
                <div data-wow-delay="2.5s" class="wow fadeInDown animated col-md-4">
                    <div class="box">
                        <a href="layout/img/natowrk.jpeg" data-fancybox="images" data-caption="<?php echo lang('CAPTIONNATWORK')?>">
                            <img class="img-responsive img-thumbnail" src="layout/img/natowrk.jpeg" alt="natowrk">
                        </a>
                    </div>
                </div>
                <div data-wow-delay="3s" class="wow fadeInDown animated col-md-4">
                    <div class="box">
                        <a href="../layout/img/montinceCompoter.jpeg" data-fancybox="images" data-caption="<?php echo lang('CAPTIONMANT')?>">
                            <img class="img-responsive img-thumbnail" src="layout/img/montinceCompoter.jpeg" alt="compater">
                        </a>
                    </div>
                </div>
                <div data-wow-delay="3.5s" class="wow fadeInDown animated col-md-4">
                    <div class="box">
                        <a href="layout/img/self-imporvment.jpeg" data-fancybox="images" data-caption="<?php echo lang('CAPTIONSEL')?>">
                            <img class="img-responsive img-thumbnail" src="layout/img/self-imporvment.jpeg" alt="self-imporvment">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Carticfcit  -->
    <!-- Start Contect Me  -->
    <div class="contect wow fadeInDown animated">
        <div class="container">
            <h3 data-wow-offset="200" class="text-center wow fadeInDown animated title">
                <?php echo lang('CONTECTWITHME')?> </h3>
            <hr />
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div data-wow-delay="0.5s" class="form-group wow slideInRight animated">
                            <input type="text" name="hasName" class="form-control" placeholder="<?php echo lang('INPUTNAME')?>">
                        </div>
                        <div data-wow-delay="1s" class="form-group wow slideInRight animated">
                            <input type="text" name="hasEmail" class="form-control" placeholder="<?php echo lang('INPUTEMAIL')?>">
                        </div>
                        <div data-wow-delay="1.5s" class="form-group wow slideInRight animated">
                            <textarea rows="10" name="HasMassage" class="form-control" placeholder="<?php echo lang('INPUTMASSAGE')?>"></textarea>
                        </div>
                        <div data-wow-delay="2s" class="form-group wow slideInRight animated">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                              <i class="fa fa-send fa-fw"></i>  <?php echo lang('SEND')?> 
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 wow slideInUp animated">
                    <div id="map">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- End My Contect Me   -->
    <!-- Start CopyRight   -->
    <footer>
        <div class="container">
            <label class="text">
                   <?php echo lang('COPYRIGHT')?>
                </label><br><br>
            <?php echo lang('DEVLOP')?>
            <p class="text-center">
                <strong class="text"> <a href="https://www.instagram.com/gw8">
                    <?php echo lang('GREATESTNAME')?>
                </a> </strong>
            </p>
            <i data-wow-iteration="infinite" style="color:#e74c3c" class="fa fa-heart fa-lg fa-fw wow pulse animated" data-wow-delay="0.1s"></i>
        </div>
    </footer>
    <!-- End CopyRight   -->

    <!-- Start Loading -->
    <div class="loading-overlay" data-wow-duration="2s" data-wow-delay="2s">
        <h1 class="text-center loading"> </h1>
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- End Loading   -->

    <!-- Start Extrnal Script  -->
    <script src="layout/js/jquery-1.12.1.min.js"></script>
    <script src="layout/js/bootstrap-rtl.js"></script>
    <script src="layout/js/jquery.nicescroll.min.js"></script>
    <script src="layout/js/jquery.fittext.js"></script>
    <script src="layout/js/smooth-scroll.min.js"></script>
    <script src="layout/js/jquery.fancybox.js"></script>
    <script src="layout/js/particles.js"></script>
    <script src="layout/js/wow.min.js"></script>
    <script src="layout/js/typed.min.js"></script>
    <script src="layout/js/frontend.js"></script>
    <!--
    <script>
        function initMap() {
            var uluru = {
                lat: 21.422510,
                lng: 39.826168
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 9,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaLfET40D8tLhCTttn9dEi3qsAT-HWBMg&callback=initMap">
    </script>
    <!-- End Extrnal Script  -->
</body>
</html>