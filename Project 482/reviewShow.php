<?php require_once("conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
  	
  	<h1></h1>
	<?php
		$sum =  0;
		$count = 0;
		$id = $_SESSION["id"];
		$sql = "SELECT rating FROM review WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            	$count++;
            	$sum = $sum + $row["rating"];
            }
            $r = $sum / $count;
		?>
			<div style="padding-left: 10%;">
			<h4><i style="color: #fd7514;font-size: 50px;" class="fas fa-star"></i><span style="color: #ffb307;font-size: 50px;"> <?php echo number_format((float)$r, 2, '.', ''); ?></span><b>/5</b> </h4>
			<h6 style="padding-left: 8%;"><b>*<?php echo $count; ?> users rated</b></h6>
			</div>
		<?php 
	    } else {
	    ?>
	    	<div style="padding-left: 10%;">
			<h4><i style="color: #fd7514;font-size: 50px;" class="fas fa-star"></i><span style="color: #ffb307;font-size: 50px;"> 0</span><b>/5</b> </h4>
			<h6 style="padding-left: 8%;"><b>*<?php echo $count; ?> users rated</b></h6>
			</div>
	    <?php	
	    }
		?>
		<hr style="border:3px solid #f1f1f1">

		<?php 

		$id = $_SESSION["id"];

		$sql = "SELECT username, review FROM review WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
        ?>
				<div style="margin: 5px auto; padding: 0 10%;">
					<h5><b><i class="fas fa-user"></i> <?php echo $row["username"]; ?> </b></h5>
					<p> <?php echo $row["review"]; ?> </p>
				</div>
				<hr>
		<?php
            }
        } else {
        ?>
        <h4 style="padding-left: 15%;"><b>
        <?php
        	echo "No Reviews Yet!";
        	echo "</b></h4>";
        	echo "<hr>";
        }
		?>

</body>
</html>