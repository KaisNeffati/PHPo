<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--   <meta content="IE=edge" http-equiv="X-UA-Compatible"> -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="ico/favicon.ico" rel="shortcut icon">

    <title>kais Web Admin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap theme -->
    <!--  <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->

    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dripicon.css">
    <link rel="stylesheet" href="css/typicons.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="js/tip/tooltipster.css">
    <link rel="stylesheet" type="text/css" href="js/vegas/jquery.vegas.css" />
    <link rel="stylesheet" type="text/css" href="js/number-progress-bar/number-pb.css">
    <!-- pace loader -->
    <script src="js/pace/pace.js"></script>
    <link href="js/pace/themes/orange/pace-theme-flash.css" rel="stylesheet" />
    

</head>

<body>
<video autoplay loop poster="3633740.jpg" id="bgvid">
    <source src="3633740.webm" type="video/webm">
    <source src="3633740.mp4" type="video/mp4">
</video>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <!-- Comtainer -->
                <div class="paper-wrap bevel tlbr">
                    <div id="paper-top">
                        <div class="row">
                            <div class="col-lg-12 no-pad">
                                <!--     -->
                                <a class="navbar-brand logo-text" href="#">CRR</a>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div style="min-height:200px;" class="wrap-fluid" id="paper-bg">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="account-box">

                                    <form role="form" method="POST" name="formulairede">
                                        <div class="form-group">
                                            <a href="#" class="pull-right label-forgot">Forgot email?</a>
                                            <label>Username or email</label>
                                            <input type="text" class="form-control" name="loginn">
                                        </div>
                                        <div class="form-group">
                                            <a href="#" class="pull-right label-forgot">Forgot password?</a>
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="pass_word">
                                        </div>
                                        <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox">Remember me</label>
                                        </div>
                                        <button class="btn btn btn-primary pull-right" type="submit">
                                            Log In
                                        </button>
                                    </form>
                                    <a class="forgotLnk" href="index.html"></a>
                                    <div class="or-box">

                                        <center>
                                            <span class="text-center login-with">Login or <b>Sign Up</b>
                                            </span>
                                        </center>
                                                                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / FOOTER -->
                <!-- Container -->
            </div>
        </div>
    </div>
    <?php
    include '../controller/autentificationController.php';
    ?>
    <div class="slide-out-div">
        <a class="handle" href="http://link-for-non-js-users"></a>
        <ul class="theme-bg">
            <li>
                <div id="button-bg"></div>
            </li>
            <li>
                <div id="button-bg2"></div>
            </li>
            <li>
                <div id="button-bg3"></div>
            </li>
            <li>
                <div id="button-bg4"></div>
            </li>
            <li>
                <div id="button-bg5"></div>
            </li>
            <li>
                <div id="button-bg6"></div>
            </li>
    
        </ul>
    </div>
    <!-- 
    ================================================== -->
    <!-- Main jQuery Plugins -->
    <script type='text/javascript' src="js/jquery.js"></script>
   <script type='text/javascript' src='js/vegas/jquery.vegas.js'></script>
    <script type='text/javascript' src='js/image-background.js'></script>
    <script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
    <script type="text/javascript" src="js/bg-changer.js"></script>

    <script type="text/javascript">
    $(function() {
        $("#button-bg").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_11.jpg')no-repeat center center fixed"
        });
    });

    $("#button-bg2").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_5.jpg')no-repeat center center fixed"
        });
    });


    $("#button-bg3").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_9.jpg')no-repeat center center fixed"
        });
    });

    $("#button-bg4").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_19.jpg')no-repeat center center fixed"
        });
    });


    $("#button-bg5").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_3.jpg')no-repeat center center fixed"
        });

    });

    $("#button-bg6").click(function() {
        $("body").css({
            "background": "url('img/wg_blurred_backgrounds_6.jpg')no-repeat center center fixed"
        });

    });

        /**
         * Background Changer end
         */
    });
    </script>



</body>

</html>
