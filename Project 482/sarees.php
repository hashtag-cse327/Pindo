<?php require_once("conn.php"); ?>
<!-- Inserting Selected Items to the cart -->
<?php 
	if(isset($_POST["add_to_cart"])){

    	if(isset($_SESSION["shopping_cart"])) {
      		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
      		
      		if(!in_array($_GET["id"], $item_array_id)) {
        		$count = count($_SESSION["shopping_cart"]);
        		$_SESSION["cart_no"] = $count + 1;
		        $item_array = array(
		          'item_id'     =>  $_GET["id"],
		          'item_name'     =>  $_POST["hidden_name"],
		          'item_price'    =>  $_POST["hidden_price"],
		          'item_img'    =>  $_POST["hidden_img"],
		          'item_quantity'   =>  $_POST["quantity"]
		        );
        		array_push($_SESSION['shopping_cart'], $item_array);
      		}
      		else {
        		echo '<script>alert("Item Already Added")</script>';
      		}
    	}
    	else {
      
	      $item_array = array(
	        'item_id'     =>  $_GET["id"],
	        'item_name'     =>  $_POST["hidden_name"],
	        'item_price'    =>  $_POST["hidden_price"],
	        'item_img'    =>  $_POST["hidden_img"],
	        'item_quantity'   =>  $_POST["quantity"]
	      );
      	  $_SESSION["shopping_cart"][0] = $item_array;
      	  $_SESSION["cart_no"] = 1;
    	}
  	}

  	if(isset($_GET["action"])) {
    	if($_GET["action"] == "delete") {
	      	foreach($_SESSION["shopping_cart"] as $keys => $values) {
	        	
	        	if($values["item_id"] == $_GET["id"]) {
	        		$_SESSION["cart_no"] = $_SESSION["cart_no"] - 1;
	          		unset($_SESSION["shopping_cart"][$keys]);
	          		echo '<script>alert("Item Removed")</script>';
	          		echo '<script>window.location="cart.php"</script>';
	        	}
	      	}
    	}
  	}
?>
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
	<title>Pindo | Sarees</title>
</head>
<body class="parallax">
	<div style= "margin-top: 150px;">
		<h1 class="glow2">Sarees</h1>
	    <div class="container" style="color: black;">
	     	<div class="row">

	     	<?php 
		      $sql = "SELECT * FROM `sarees` ";
		        $result=$conn->query($sql);
		        while($row = mysqli_fetch_assoc($result))
		        {
		    ?>
		    	 <a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
		     	 <div class="col-sm">
		        
		          <form method="post" action="sarees.php?action=add&id=<?php echo $row["id"]; ?>">
		            <div class="card card-body" style="width: 20rem; margin: 10px;">
		              <img class="card-img-top img-responsive" src="images/<?php echo $row["image"]; ?>" /><br />

		              <h4 class="text-info"><?php echo $row["name"]; ?></h4>

		              <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
              		  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
              		  <input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>" />

		              <h4 class="text-danger">৳ <?php echo $row["price"]; ?></h4></a>
		              <b style="text-align: center;color: black;font-size: 20px;">Quantity</b>
		              <input type="number" name="quantity" value="1" class="form-control" />

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