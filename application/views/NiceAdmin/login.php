<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>JobShare Login</title>

        <!-- Bootstrap CSS -->    
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url(); ?>assets/css/elegant-icons-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url('assets/js/jquery-ui-1.10.4.min.js'); ?>"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
        .lbError{
            color: red;
        }
    </style>
    <body class="login-img3-body">

        <div class="container">

            <form class="login-form" action="index.html">        
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <label class="lbError" id="lblerr"></label>
                    <div class="input-group">

                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" class="form-control" id="user" placeholder="Username" >
                    </div>
                    <label class="lbError" id="lblerrpwd"></label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="password" id="pwd" class="form-control" placeholder="Password">
                    </div>
                    <label class="checkbox">

                        <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                    </label>
                    <button class="btn btn-primary btn-lg btn-block"  onclick="return validate();" type="button">Login</button>

                </div>
            </form>

        </div>


    </body>
</html>

<script>
    function validate() {
        $(".lbError").show();
        if ($("#user").val() == '') {
            $("#user").focus();
            $("#lblerr").text('required').fadeOut(8000);
            return false;
        }
        else if ($("#pwd").val() == '') {
            $("#pwd").focus();
            $("#lblerrpwd").text('required').fadeOut(8000);
            return false;
        }
        else {
            loginProcess();
        }

    }


    function loginProcess() {

            $.ajax({
                type: "POST",
                url: '<?php echo base_url('LoginController/login'); ?>',
                data: {'username': $("#user").val(),'password':$('#pwd').val(),'role':'admin'},
                async: false,
                dataType: 'json',
                success: function (data) {
                   alert(data);
                }
            });
    }
</script>
