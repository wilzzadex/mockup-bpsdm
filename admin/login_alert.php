<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Login Page</title>
    <link rel="shortcut icon" href="page/gambar/13.png" />
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="Responsive Admin Template build with Twitter Bootstrap and jQuery" name="description" />
    <meta content="ClipTheme" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,100,200,300,500,600,700,800,900/" />
    <link type="text/css" rel="stylesheet" href="page/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="page/bower_components/font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="page/assets/fonts/clip-font.min.css" />
    <link type="text/css" rel="stylesheet" href="page/bower_components/iCheck/skins/all.css" />
    <link type="text/css" rel="stylesheet" href="page/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <link type="text/css" rel="stylesheet" href="page/bower_components/sweetalert/dist/sweetalert.css" />
    <link type="text/css" rel="stylesheet" href="page/assets/css/main.min.css" />
    <link type="text/css" rel="stylesheet" href="page/assets/css/main-responsive.min.css" />
    <link type="text/css" rel="stylesheet" media="print" href="page/assets/css/print.min.css" />
    <link type="text/css" rel="stylesheet" id="skin_color" href="page/assets/css/theme/light.min.css" />
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

</head>

<body class="login example1">

    <div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="logo">
       <center><img src="page/gambar/13.png" width="100px" alt=""></center> 
            BADAN PENGEMBANGAN SDM PERHUBUNGAN
        </div>
        <!-- start: LOGIN BOX -->
        <div class="box-login">
          
            <form class="form-login" action="page/">
                <div class="errorHandler alert alert-danger">
                    <i class="fa fa-remove-sign"></i> Anda telah gagal login 10x, Silahkan hubungi super admin !
                </div>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group form-actions">
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                            
                        </span>
                    </div>
                    <div class="form-group form-actions">
                    <div class="form-group form-actions">
                        <center><div class="g-recaptcha" data-sitekey="6LeeAbUZAAAAAJiOhS5UxBoVk84FPGTxwbHvoglO"></div></center>
                    </div>
                    </div>
                    <div class="form-actions">
                       
                        <button type="submit" class="btn btn-bricky pull-right">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                    
                </fieldset>
            </form>
        </div>
        <!-- end: LOGIN BOX -->
       
        <!-- start: REGISTER BOX -->
        
        <!-- end: REGISTER BOX -->
        <!-- start: COPYRIGHT -->
        <div class="copyright">
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; BPSDMP.
        </div>
        <!-- end: COPYRIGHT -->
    </div>

    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
            <script src="../../bower_components/respond/dest/respond.min.js"></script>
            <script src="../../bower_components/Flot/excanvas.min.js"></script>
            <script src="../../bower_components/jquery-1.x/dist/jquery.min.js"></script>
            <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="page/bower_components/jquery/dist/jquery.min.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="page/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="page/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="page/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="page/bower_components/blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript" src="page/bower_components/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="page/bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
    <script type="text/javascript" src="page/bower_components/jquery.cookie/jquery.cookie.js"></script>
    <script type="text/javascript" src="page/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="page/assets/js/min/main.min.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="page/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="page/assets/js/min/login.min.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    <script>
        jQuery(document).ready(function() {
            Main.init();
            Login.init();
        });
    </script>

</body>

</html>