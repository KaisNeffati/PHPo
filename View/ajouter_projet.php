<!DOCTYPE html>
<?php session_start();?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--   <meta content="IE=edge" http-equiv="X-UA-Compatible"> -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="ico/favicon.ico" rel="shortcut icon">

    <title>My Web Site</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap theme -->
    <!--  <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dripicon.css">
    <link rel="stylesheet" href="css/typicons.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/mail.css">
    <link rel="stylesheet" href="js/tip/tooltipster.css">
    <link rel="stylesheet" type="text/css" href="js/vegas/jquery.vegas.css" />



</head>

<body role="document">

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- TOPNAV -->
    <img alt="" class="navbar-right" id="logo-aisa" src="1.png">
    <div class="row">
        <div class="col-lg-3">
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                <li><i class="fontello-th text-amber"></i>
                </li>
                <li id="Date"></li>
            </ul>
            <ul class="nav navbar-nav navbar-left list-unstyled list-inline text-amber date-list">
                <li><i class="fontello-stopwatch text-amber"></i>
                </li>
                <li id="hours"></li>
                <li class="point">:</li>
                <li id="min"></li>
                <li class="point">:</li>
                <li id="sec"></li>
            </ul>


        </div>



    </div>
    <!-- END OF TOPNAV -->
    <!-- Comtainer -->
    <div class="container-fluid paper-wrap bevel tlbr">
        <div id="paper-top">
            <div class="row">
                <div class="col-sm-3 no-pad">

                    <a class="navbar-brand logo-text" href="#">CRR project</a>

                    <ul class="list-unstyled list-inline noft-btn">
                        <li data-toggle="tooltip" data-placement="bottom" title="Profile"><i class=" icon-user"></i>
                        </li>

                        <li data-toggle="tooltip" data-placement="bottom" title="Log Out"> <a href="../controller/log_out.php" class="text-white"><i class="icon-upload"></i></a>
                        </li>

                    </ul>
                </div>

                <div class="col-sm-6 no-pad">
                    <ul style="margin-top:8px;" class="nav navbar-nav navbar-left list-unstyled list-inline text-gray date-list news-list">
                        <!-- <li><i class="fontello-doc-text text-gray"></i>
                        </li> -->
                        <li>
                            <ul class="list-unstyled top-newsticker text-gray news-list">
                                <li>
                                    <strong>My Project,</strong>Made in AISA: Aviation IT Services Africa&nbsp;
                                </li>
                                <li>
                                    <strong>My Framer,</strong>is Tarik Akrout,php web trainer &nbsp;
                                </li>
                                <li>
                                    <strong>My Name,</strong>is Kais Neffati ,student in Computer Engineering &nbsp;
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>



            </div>
        </div>

       <!-- SIDE MENU -->
        <div class="wrap-sidebar-content">
            <div id="skin-select">
                <a id="toggle">
                    <span class="fa icon-menu"></span>
                </a>

                <div class="skin-part">
                    <div id="tree-wrap">
                        <div class="side-bar">
                            <ul id="menu-showhide" class="topnav">
                                <li class="devider-title">
                                    <h3>
                                        <span>Menu</span>
                                    </h3>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="utilisateur">
                                        <i class=" fontello-mail-1"></i>
                                        <span>Utilisateurs</span>

                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="liste_utilisateurs.php" title="Liste">liste</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="ajouter_utilisateur.php" title="Ajouter">ajouter</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Fonction">
                                        <i class=" fontello-mail-1"></i>
                                        <span>Fonction</span>

                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="liste_fonction.php" title="liste">Liste</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="ajouter_fonction.php" title="Ajouter">ajouter</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="UI">
                                        <i class="fontello-note"></i>
                                        <span>CRR</span>
                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="liste_crr.php" title="liste">liste</a>
                                        </li>
                                        <li><a href="ajouter_crr.php" title="ajouter">
                                            ajouter
                                        </a>
                                        </li>                               
                                    </ul>
                                </li>
                                <li>
                                    <a class="tooltip-tip" href="#" title="Projet">
                                        <i class=" fontello-mail-1"></i>
                                        <span>projet</span>

                                    </a>
                                    <ul>
                                        <!--  <li class="hide-min-toggle">UI Element</li> -->
                                        <li>
                                            <!-- class="active" -->
                                            <a href="liste_projet.php" title="liste">Liste</a>
                                        </li>
                                        <li>
                                            <!-- class="active" -->
                                            <a href="ajouter_projet.php" title="Ajouter">ajouter</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="side-dash">
                                
                                <ul class="side-dashh-list">
                                    
                                    <!-- end task item -->
                                    
                                    <!-- end task item -->
                                    
                                </ul>

                                
                                <div id="doughnutChart" class="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/skin-select -->
            <!-- END OF SIDE MENU -->

            <!-- Breadcrumb -->
            <div class="sub-board">
                <span class="header-icon"><i class="fontello-home"></i>
                </span>
                <ol class="breadcrumb newcrumb ng-scope">
                    <li>
                        <a href="#">
                            <span>
                            </span>Utilisateurs</a>
                    </li>
                    <li><a href="#">ajouter</a>
                    </li>
                </ol>
                <div class="dark" style="visibility: visible;">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control search rounded id_search" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of Breadcrumb -->






                        <!-- CONTENT -->
            <div class="wrap-fluid" id="paper-bg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">

                                <h3 class="box-title"><i class="fontello-doc"></i>
                                    <span>Ajouter Projet </span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body compose_mail">
                               
                                    <form role="form" method="POST">
                                    <label> code :</label>
                                    <div class="form-group">
                                      
                                        <input type="text" name="code_textbox" placeholder="...." class="form-control">
                                    </div>
                                    <label> libelle :</label>
                                    <div class="form-group">
                                      
                                        <input type="text" name="libelle_textbox" placeholder="...." class="form-control">
                                    </div>
                                   
                                                      

                                    
                                    <button class="btn bg-aqua pull-right" type="submit">
                                        <span class="fontawesome-save"></span>Save in Database</button>
                                    
                                    <div style="clear:both;"></div>
                                    <br>
                                    <br>
                                    </form>
                                        <?php
                                        include '../controller/insert_projet_controller.php';
                                        ?>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>

            </div>
            
            
            <!-- #/paper bg -->
        </div>
        <!-- ./wrap-sidebar-content -->

        <!-- / END OF CONTENT -->

        <!-- FOOTER -->
        <div id="footer">
            <div class="devider-footer-left"></div>
            <div class="time">
                <p id="spanDate"></p>
                <p id="clock"></p>
            </div>
 <div class="devider-footer"></div>
            <ul>
                <li><i class="fa fa-facebook-square"></i>
                </li>
                <li><i class="fa fa-twitter-square"></i>
                </li>
                <li><i class="fa fa-instagram"></i>
                </li>
            </ul>
        </div>
        <!-- / FOOTER -->
    </div>
    <!-- Container -->





    <!-- 
    ================================================== -->
    <!-- Main jQuery Plugins -->
    <script type='text/javascript' src="js/jquery.js"></script>

    <script type='text/javascript' src='js/bootstrap.js'></script>
    <script type='text/javascript' src='js/date.js'></script>
    <script type='text/javascript' src='js/slimscroll/jquery.slimscroll.js'></script>
    <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
    <script type='text/javascript' src='js/sliding-menu.js'></script>
    <script type='text/javascript' src='js/scriptbreaker-multiple-accordion-1.js'></script>
    <script type='text/javascript' src='js/tip/jquery.tooltipster.min.js'></script>
    <script type='text/javascript' src="js/donut-chart/jquery.drawDoughnutChart.js"></script>
    <script type='text/javascript' src="js/tab/jquery.newsTicker.js"></script>
    <script type='text/javascript' src="js/tab/app.ticker.js"></script>
    <script type='text/javascript' src='js/app.js'></script>

     <script type='text/javascript' src='js/vegas/jquery.vegas.js'></script>
    <script type='text/javascript' src='js/image-background.js'></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script type="text/javascript" src="js/bg-changer.js"></script>


    <script type='text/javascript' src="js/button/ladda/spin.min.js"></script>
    <script type='text/javascript' src="js/button/ladda/ladda.min.js"></script>
    <script type='text/javascript' src='js/button/progressbutton.jquery.js'></script>

    <script>
    jQuery(document).ready(function($) {
        var interval;
        var bar = jQuery('.main').progressbutton();
        jQuery('#reset').click(function() {
            clearInterval(interval);
            if (bar) {
                bar.progressbutton('reset');
            }
        });
        jQuery('.color').click(function() {
            //clearInterval(interval);
            var clicked = jQuery(this);
            bar.progressbutton({
                color: clicked.data('color')
            });
        });
        jQuery('.opacity').click(function() {
            //clearInterval(interval);
            var clicked = jQuery(this);
            bar.progressbutton({
                opacity: clicked.data('opacity')
            });
        });

        jQuery('.test').click(function() {
            var itm = jQuery(this);
            if (itm.hasClass('disable')) {
                itm.attr('disabled', 'disabled');
            }
            var bar = itm.progressbutton({
                percent: -1
            });
            var clock = 0;

            var interval = setInterval(function() {
                bar.progressbutton({
                    percent: clock
                });
                clock = clock + 0.5;
                if (clock > 100) {
                    itm.removeAttr('disabled');
                    clearInterval(interval);
                    bar.progressbutton('reset');
                }
            }, 30);
        });
        jQuery('.action').click(function() {
            clearInterval(interval);
            var clicked = jQuery(this);
            bar.progressbutton({
                percent: clicked.data('percent')
            });
        });
        jQuery('.other').click(function() {
            var itm = jQuery('#standard');
            var bar = itm.progressbutton({
                percent: -1
            });
            var clock = 0;

            var interval = setInterval(function() {
                bar.progressbutton({
                    percent: clock
                });
                clock = clock + 0.5;
                if (clock > 100) {
                    clearInterval(interval);
                    bar.progressbutton('reset');
                }
            }, 30);
        });


    });
    //Lada Button
    (function($) {
        "use strict";
        // Bind normal buttons
        Ladda.bind('.button-demo button', {
            timeout: 2000
        });

        // Bind progress buttons and simulate loading progress
        Ladda.bind('.progress-demo button', {
            callback: function(instance) {
                var progress = 0;
                var interval = setInterval(function() {
                    progress = Math.min(progress + Math.random() * 0.1, 1);
                    instance.setProgress(progress);

                    if (progress === 1) {
                        instance.stop();
                        clearInterval(interval);
                    }
                }, 200);
            }
        });

        // You can control loading explicitly using the JavaScript API
        // as outlined below:

        // var l = Ladda.create( document.querySelector( 'button' ) );
        // l.start();
        // l.stop();
        // l.toggle();
        // l.isLoading();
        // l.setProgress( 0-1 );
    })(jQuery);
    </script>







</body>

</html>
