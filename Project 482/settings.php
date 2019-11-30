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

		if($newp == $newpp) {
		$sql = "UPDATE users SET password='$newp' WHERE username='$u' AND password= '$oldp'";

		if (mysqli_query($conn, $sql)) {
			$message = "Password updated successfully.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$message = "Error: " . $sql . "<br/>" . mysqli_error($conn);
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
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
		<div style="margin-left: 150px; margin-top: 50px; ">
			<h4><b>Full Name: </b><?php echo $_SESSION["fn"]; ?> <button style="border: none; font-size: 20px;background: #f4e9e9;text-decoration: underline;color: blue;padding-left: 10px;" onclick="toggler('fname')">[+edit]</button> </h4>
			<form method="POST" id="fname" style="display: none;">
				Enter new name: 
				<input type="text" name="nme"> <button type="submit" name="u1">Update</button>
			</form>

			<button style="border: none; font-size: 25px;background: #f4e9e9;text-decoration: underline;color: blue;" onclick="toggler('p')">Change Password</button>

			<form name="passForm" method="POST" id="p" style="display: none;">
				Enter Old Password: 
				<input style="margin-left: 45px;" type="password" name="p1"> <br>
				Enter New Password: 
				<input style="margin-left: 39px;" type="password" name="p2"><br>
				Re-enter New Password: 
				<input style="margin-left: 14.5px;" type="password" name="p3"><br>
				<button type="submit" name="u2" onclick="validate()" >Update</button>

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