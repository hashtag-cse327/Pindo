<?php include("header.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pindo | Login</title>
	<link rel="stylesheet" type="text/css" href="css/logi.css">

    <!-- Form Validation JS -->
    <script type="text/javascript" src="js/form_validation.js"></script>
</head>
<body>
	<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h1>Sign In</h1>
                     
                        <form method="POST" action="/Pindo/index.php" name="signin_form" onsubmit="return signin_validate()">
                        	Username:<br>
                        	<input type="text" class="form-control" name="ur_name" placeholder="iftiaz.ahmed"><br>
                        	Password:<br>
                        	<input type="password" class="form-control" name="password"><br><br>
                        	<button type="login" class="btnSubmit">Login</button><br>
                        </form>
                    
                </div>
                <div class="col-md-6 login-form-2">
                    <div class="login-logo">
                        <img src="images/logo.png" alt=""/>
                    </div>
                    <h1>Sign Up</h1>
                        <form name="signup_form" method="POST" action="/Pindo/index.php" onsubmit="return signup_validate()">
                        	Full Name:<br>
                        	<input type="text" class="form-control" name="f_name" placeholder="Iftiaz Ahmed"><br>
                        	Email:<br>
                        	<input type="email" class="form-control" name="email" placeholder="example@email.com"><br>
                        	Username:<br>
                        	<input type="text" class="form-control" name="u_name" placeholder="iftiaz.ahmed"><br>
                        	Gender:<br>
                        	<select name="gender" class="form-control">
							  <option value="0">Choose..</option>
							  <option value="Male">Male</option>
							  <option value="Female">Female</option>
							  <option value="Other">Other</option>
							</select><br>
                        	Password:<br>
                        	<input type="password" class="form-control" name="password1"><br>
                        	Re-Enter Password:<br>
                        	<input type="password" class="form-control" name="password2"><br><br>
                        	<button type="signup" class="btnSubmit">Sign Up</button>
                        </form>
                </div>
            </div>
        </div>

</body>
</html>

<?php include("footer.php") ?>