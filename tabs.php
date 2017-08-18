<html>
<head lang="en">
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="lib/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" href="css/w3.css">
    <script src="lib/jquery/jquery-2.2.4.min.js"></script>
	 <script src="jquery.min.js"></script>
	
	<script>
  
</script>
    <title>SPP</title>
  <style type="text/css">
    .login-register-form-section {
        max-width: 350px;
        margin: 0 auto;
    }
    .login-register-form-section i {
        width: 10px;
    }
    .login-register-form-section .nav-tabs > li > a {
        color: #2abb9b;
    }
 
    .login-register-form-section .nav-tabs > li.active > a {
        background-color: #2abb9b;
        border-color: #2abb9b;
        color: white;
    }
    .login-register-form-section .nav-tabs > li > a, 
    .login-register-form-section .nav-tabs > li.active > a {
        width: 160px;
        text-align: center; 
        border-radius: 0;
    }
    .login-register-form-section .nav-tabs {
        padding-bottom: 10px;
        margin-bottom: 10px;
    }
    .login-register-form-section .btn-custom {
        width: 100%;
        background-color: #2abb9b;
        border-color: #2abb9b;
        margin-bottom: 0.5em;
        border-radius: 0;
    }
    .login-register-form-section .btn-custom:hover {
        width: 100%;
        background-color: #48A497;
        border-color: #2abb9b;
    }
    .login-register-form-section .form-group {
        padding: 0 20px;
    }
</style>
</head>
<body>
    <br>
    <div class="row">
        <div class="container">
            <div class="login-register-form-section">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                    <li><a href="#login" data-toggle="tab">Register</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="login">
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group " >
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="login_email" class="form-control" placeholder="Username or email" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input type="password" name="login_password" class="form-control" placeholder="Password" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="rememberMe">
                                <label for="rememberMe">Remember Me</label>
                                <a href="#" class="pull-right">Forgot password?</a>
                            </div>  
                            <input type="submit" value="Login" class="btn btn-success btn-custom">

                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="register">
                        <form class="form-horizontal" method="post" action="">
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="register_username" class="form-control" placeholder="Username" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                    <input type="text" name="register_fullname" class="form-control" placeholder="Full name" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" name="register_email" class="form-control" placeholder="Email" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" name="register_password" class="form-control" placeholder="Password" required="required">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" name="register_cpassword" class="form-control" placeholder="Confirm Password" required="required">
                                </div>
                            </div>
                            <input type="submit" value="Register" class="btn btn-success btn-custom">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>
