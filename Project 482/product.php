<?php require_once("conn.php"); ?>
<?php 
	if ($_SESSION["authen"]){
		include("sidebar.php");
	} 
	else { 
	}
?>
<?php include ("header.php") ?>

<head>
	<title>Pindo | <?php echo $_GET['name']; ?> </title>
	<link rel="stylesheet" type="text/css" href="css/productt.css">
</head>

<body>

	<div class="container">
		<h1 style="text-align: center; margin: 120px 0px 80px;">Product Information</h1>
		<div class="row">
			<div class="col-md-3" style="margin-top: 50px;">
				<img class="img-product zoom zoom:hover" src="images/<?php echo $_GET['pic']; ?> ">
			</div>
			<div class="col-md-7 sec-back text-product">
				<strong style= "text-align: top-left;color: #1692a9;"> <?php echo $_GET['name'] ?> </strong><br>
				<hr>
				<span>Quantity: </span>
				<input type="number" style="width: 12%;" name="quantity" value="1"><br>
				<hr>
				<span style="color: red; font-weight: 900;font-size: 30px;">৳ <?php echo $_GET['price']; ?></span><br>
				<button type= "submit" class = "btnSubmit">Add to cart</button>
				<button type= "submit" class = "btnSubmit1">Buy Now</button>
			</div>

		</div>

		<h1 style="text-align: center; margin-top: 50px;">Customer Reviews</h1>
		<hr>

		<?php 
		$sum =  0;
		$count = 0;
		$id = $_GET["id"];
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

		$id = $_GET["id"];

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
		
		<h2 style="text-align: center;">Review this product</h2>

		<form method="POST" id="myForm" action="reviewInsert.php">
			<?php $id = $_GET["id"]; ?>
			<div style="margin-left: 25%;">
				Rating:<br>
				1  <input type="radio" name="rate" value="1">
				2  <input type="radio" name="rate" value="2">
				3  <input type="radio" name="rate" value="3">
				4  <input type="radio" name="rate" value="4">
				5  <input type="radio" name="rate" value="5">
				<span style="margin-left: 5px;color: red;" id="result"></span>
			</div>

			<input type="hidden" name="id" value="<?php echo $id; ?>">

			<textarea name="review" class="form-control" placeholder="Your Review..." rows="4" style="width: 50%; margin: 2px auto;" required></textarea>

			<button type="submit" id="reviewBtn" style="margin-top: 5px; margin-left: 25%;" class="btn btn-primary">Post</button>
			<br>
			
		</form>


	</div>

	<!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/review.js"></script>
</body>

<?php include("footer.php") ?>
