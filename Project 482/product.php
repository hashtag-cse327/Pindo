<?php include ("header.php") ?>
<?php 
	if (isset($_POST["ur_name"])==""){
	} 
	else {
	  include("sidebar.php");
	}
?>

<head>
	<title>Product</title>
	<link rel="stylesheet" type="text/css" href="css/productt.css">
</head>

<body>

	<div class="container">
		<h1 style="text-align: center; margin: 120px 0px;">Product Information</h1>
		<div class="row">
			<div class="col-md-3">
				<img class="img-product zoom zoom:hover" src="images/p1.png">
			</div>
			<div class="col-md-9 sec-back text-product">
				<strong style= "text-align: top-left">Product name:</strong><br>
				<span>brand name</span><br>
				<span>product id</span><br>
				<span>Quantity: </span>
				<input type="number" style="width: 5%;" name="quantity" value="1"><br>
				<button type= "submit" class = "btnSubmit">Add to cart</button>
				<button type= "submit" class = "btnSubmit1">Buy Now</button>
			</div>

		</div>

		<h1 style="text-align: center; margin-top: 50px;">Customer Review</h1>
	</div>

	








</body>

<?php include("footer.php") ?>