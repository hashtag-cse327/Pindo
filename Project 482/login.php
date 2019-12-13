<?php
    ob_start(); //to store the header in the buffer, we will use the php ob_start() function
    require_once("conn.php"); 
?>
<?php include("header.php") ?>

<!-- Sign in part -->

<?php 
    $_SESSION["authen"] = False;
    $_SESSION["not_pass"] = False;
    if(isset($_POST['signin'])){

        $user = $_POST['ur_name'];
        $pass = $_POST['password'];
        $_SESSION["username"] = $user;
        $_SESSION["pass"] = $pass;

        $sql = "SELECT fullname, email FROM users WHERE username='$user' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["fn"] = $row["fullname"];
                $_SESSION["em"] = $row["email"];
                $_SESSION["authen"] = True;
                $_SESSION["cart_no"] = 0;
            }
        } else {
            $_SESSION["not_pass"] = True;
            $_SESSION["authen"] = False;
        }

        $change = $_SESSION["authen"];
        if($change == True){
            header("Location: index.php");
            ob_end_flush(); //to clean the buffer, we will use the ob_end_flush() function
        }
    }
?>


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
                     
                        <form method="POST" name="signin_form" action="" onsubmit="return signin_validate()">
                        	Username:<br>
                        	<input type="text" class="form-control" name="ur_name" placeholder="iftiaz_ahmed"><br>
                        	Password:<br>
                        	<input type="password" class="form-control" name="password"><br>
                            <span style="color: #00ffff;font-weight: 100;"><?php
                                $change = $_SESSION["not_pass"]; 
                                if($change == True){
                                    echo "*Password didn't match!";
                                }
                             ?></span>
                             <br><br>
                        	<button type="login" name="signin" class="btnSubmit">Login</button><br>
                        </form>
                    
                </div>
                <div class="col-md-6 login-form-2">
                    <div class="login-logo">
                        <img src="images/logo.png" alt=""/>
                    </div>
                    <h1>Sign Up</h1>
                        <form name="signup_form" method="POST" action="/Pindo/login.php" onsubmit="return signup_validate()">
                        	Full Name:<br>
                        	<input type="text" class="form-control" name="f_name" placeholder="Iftiaz Ahmed"><br>
                        	Email:<br>
                        	<input type="email" class="form-control" name="email" placeholder="example@email.com"><br>
                        	Username:<br>
                        	<input type="text" class="form-control" name="u_name" placeholder="iftiaz_ahmed"><br>
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
                        	<button type="signup" class="btnSubmit" name="signup">Sign Up</button>
                        </form>
                </div>
            </div>
        </div>

</body>
</html>

<!-- Saving signup information in database -->

<?php 
    
    if(isset($_POST['signup'])){

        $user   = $_POST['u_name'];
        $fn     = $_POST['f_name'];
        $email  = $_POST['email'];
        $gender = $_POST['gender'];
        $pass   = $_POST['password1'];

        $sql = "INSERT INTO users (username, fullname, email, gender, password) VALUES ('$user', '$fn', '$email', '$gender', '$pass')";

        if (mysqli_query($conn, $sql)) {
            $message = "Sign up successfull!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        $sql = "CREATE TABLE $user (
            name VARCHAR(255) NOT NULL,
            quantity VARCHAR(255) NOT NULL,
            price VARCHAR(255) NOT NULL,
            image VARCHAR(255) NOT NULL,
            purchased_time VARCHAR(255) NOT NULL
            )";
        mysqli_query($conn, $sql);

    }
?>

<?php include("footer.php") ?>