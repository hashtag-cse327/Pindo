<?php include ("header.php") ?>
<?php 
	if (isset($_POST["ur_name"])==""){
	} 
	else {
	  include("sidebar.php");
	}
?>

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
				<strong style= "text-align: top-left"> <?php echo $_GET['name'] ?> </strong><br>
				<hr>
				<span>Quantity: </span>
				<input type="number" style="width: 6%;" name="quantity" value="1"><br>
				<hr>
				<span style="color: red; font-weight: 900;font-size: 30px;">৳ <?php echo $_GET['price']; ?></span><br>
				<button type= "submit" class = "btnSubmit">Add to cart</button>
				<button type= "submit" class = "btnSubmit1">Buy Now</button>
			</div>

		</div>

		<h1 style="text-align: center; margin-top: 50px;">Customer Review</h1>
	</div>

	








</body>

<?php include("footer.php") ?>