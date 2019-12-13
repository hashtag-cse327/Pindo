<?php require_once("conn.php"); ?>

<?php 
	
		$user = $_SESSION["username"];
		$text = $_POST["review"];
		$id = $_POST["id"];

		if (isset($_POST["rate"]) == null){
			$rate = 0;
		} else {
			$rate = $_POST["rate"];
		}

		$sql = "INSERT INTO review (id, username, review, rating) VALUES ('$id','$user','$text','$rate')";

		if(mysqli_query($conn, $sql)){
			echo "Your review has been recorded.";
		} else {

		}


?>
