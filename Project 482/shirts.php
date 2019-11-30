<?php require_once("conn.php"); ?>
<?php 
	if ($_SESSION["authen"]){
		include("sidebar.php");
	} 
	else {
	}
?>
<?php include("header.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pindo | Shirts/T-shirts</title>
</head>
<body class="parallax">
	<div style= "margin-top: 150px;">
		<h1 class="glow2">Shirts/T-shirts</h1>
	    <div class="container" style="color: black;">
	     	<div class="row">

			<?php 
		      $sql = "SELECT * FROM `men_shirt` ";
		        $result=$conn->query($sql);
		        while($row = mysqli_fetch_assoc($result))
		        {
		    ?>
		    	 <a href="product.php?name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
		     	 <div class="col-sm">
		        
		          <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
		            <div class="card card-body" style="width: 20rem; margin: 10px;">
		              <img class="card-img-top img-responsive" src="images/<?php echo $row["image"]; ?>" /><br />

		              <h4 class="text-info"><?php echo $row["name"]; ?></h4>

		              <h4 class="text-danger">৳ <?php echo $row["price"]; ?></h4></a>
		              <b style="text-align: center;color: black;font-size: 20px;">Quantity</b>
		              <input type="number" name="quantity" value="1" class="form-control" />

		              <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

		              <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

		              <input type="submit" id="my-form" name="add_to_cart"  style="margin-top: 5px;" class="btn btn-primary" value="Add to Cart" />

		            </div>
		          </form>
		        </div>
		        
		    <?php
		        }
		     ?>
	</div>
		</div>
			</div>
</body>
</html>





<?php include("footer.php") ?>