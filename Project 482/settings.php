<?php require_once("conn.php"); ?>
<?php 

	if(isset($_POST['u1'])){

		$name = $_POST['nme'];
		$u = $_SESSION["username"];
		$sql = "UPDATE users SET fullname='$name' WHERE username='$u'";

		if (mysqli_query($conn, $sql)) {
			$_SESSION["fn"] = $_POST['nme'];
			$message = "Full name updated successfully.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>

<?php 

	if(isset($_POST['u2'])){

		$oldp = $_POST['p1'];
		$newp = $_POST['p2'];
		$newpp = $_POST['p3'];
		$u = $_SESSION["username"];
		$p = $_SESSION["pass"];

		if($newp == $newpp) {
			$sql = "UPDATE users SET password='$newp' WHERE username='$u' AND password= '$oldp'";

			if($oldp == $p) {
				if (mysqli_query($conn, $sql)) {
					$message = "Password updated successfully.";
					echo "<script type='text/javascript'>alert('$message');</script>";
				} else {
					$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			} else {
				$message = "Entered wrong old password!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
	    }
	}
?>

<?php 
	if(isset($_POST['u3'])){
		$email = $_POST['email'];
		$u = $_SESSION["username"];
		$sql = "UPDATE users SET email='$email' WHERE username='$u'";
		if (mysqli_query($conn, $sql)) {
			$_SESSION["em"] = $_POST['e'];
			$message = "Email updated successfully.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>

<?php 
	
	if(isset($_POST['u4'])){
		// Get image name
		$image = $_FILES['image']['name'];

		$target = "images/user".basename($image); // image file directory

		
		$u = $_SESSION["username"];

		$sql = "UPDATE users SET image='$image' WHERE username='$u'";

        if (mysqli_query($conn, $sql)) {
            $message = "Image uploaded successfully!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){

		} else {

		}
	}

?>



<?php include("header.php") ?>
<?php 
	if ($_SESSION["authen"]){
		include("sidebar.php");
	} 
	else {
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Pindo | Settings</title>
</head>
<body class="parallax">
	<div class="container" style = " margin-top: 130px;"> 
		<h1>Account Settings</h1>
		<hr>
		<div class="setting" style=" margin-top: 50px; ">
			<h4><b>Full Name: </b><?php echo $_SESSION["fn"]; ?> <button style="border: none; font-size: 20px;background: #f4e9e9;text-decoration: underline;color: blue;padding-left: 10px;" onclick="toggler('fname')">[+edit]</button> </h4>
			<form method="POST" id="fname" style="display: none;">
				Enter new name: 
				<input type="text" name="nme" required> <button type="submit" name="u1">Update</button>
			</form>

			<p style="font-size: 25px; margin-top: 10px; margin-bottom: 0px;" ><b>Change Password</b></p>
			<p style="margin: 0px;margin-top: -15px;">
				It's a good idea to use a strong password that you don't use elsewhere 
				<button style="border: none; background: #f4e9e9;text-decoration: underline;color: blue; font-size: 20px; padding-left: 10px;" onclick="toggler('p')">[+edit]</button> 
			</p>

			<form name="passForm" method="POST" id="p" style="display: none;">
				Enter Old Password: 
				<input style="margin-left: 45px;" type="password" name="p1" required> <br>
				Enter New Password: 
				<input style="margin-left: 39px;" type="password" name="p2" required><br>
				Re-enter New Password: 
				<input style="margin-left: 14.5px;" type="password" name="p3" required><br>
				<button type="submit" name="u2" onclick="validate()" >Update</button>

			</form>

			<h4><b> Email: </b><?php echo $_SESSION["em"]; ?> <button style="border: none; font-size: 20px;background: #f4e9e9;text-decoration: underline;color: blue;padding-left: 10px;" onclick="toggler('e')">[+edit]</button> </h4>
			<form method="POST" id="e" style="display: none;">
				Enter New Email: 
				<input type="text" name="email" required> 
				<button type="submit" name="u3">Update</button>
			</form>

			<p style="font-size: 25px; margin-top: 10px; margin-bottom: 0px;" ><b>Change Your Profile Image</b></p>

			<form name="name" method="POST" action="/Pindo/settings.php" enctype="multipart/form-data">
				<input type="file" name="image"><br>
				<button style="margin-top: 10px;" type="submit" name="u4" >Upload Image</button>
			</form>



		</div>
		

	</div>

	

	<script type="text/javascript">
        function toggler(divId) {
      		$("#" + divId).toggle();
      	}

      	function validate(){
      		var x = document.forms["passForm"]["p2"].value;
      		var y = document.forms["passForm"]["p3"].value;

      		if(x == y){

		  	}
		  	else{
		  		alert("Password didn't match, try again!");
		  		return false;
		  	}
      	}
    </script> 

</body>
</html>




<?php include("footer.php") ?>