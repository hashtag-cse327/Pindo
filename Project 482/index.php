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
<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pindo | Biggest Online Shop</title>
    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
 
  <body>	

  	<!--Slideshow Starts -->
	  <div class="container-fluid">
	  	<div class="slider">
	    
	      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner">
		      <div class="carousel-item active">
		        <img class="d-block w-100 h-100" src="images/slider4.jpg" alt="First slide">
		      </div>
		      <div class="carousel-item">
		        <img class="d-block w-100 h-100" src="images/slider2.jpg" alt="Second slide">
		      </div>
		      <div class="carousel-item">
		        <img class="d-block w-100 h-100" src="images/slider3.jpg" alt="Third slide">
		      </div>
		    </div>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
	    </div>
	  </div>

 	 <!--Slideshow Ends -->

 	 <div class="heading">
 	 	<h1>Pindo Collections</h1>
 	 </div>

 	 <!-- Main Contents -->

 	 <div class="parallaxx">
	    <div class="container" style="color: black;">
	     	<div class="row">

		    <?php 
		      $sql = "SELECT * FROM `men_pants` ";
		        $result=$conn->query($sql);
		        while($row = mysqli_fetch_assoc($result))
		        {
		    ?>		
		    	 <a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
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
              		  <input type="hidden" name="hidden_img" value="<?php echo $row["image"]; ?>" />
					  
		              <input type="submit" id="my-form" name="add_to_cart"  style="margin-top: 5px;" class="btn btn-primary" value="Add to Cart" />

		            </div>
		          </form>
		        </div>
		        

		    <?php
		        }
		     ?>

		     <?php 
		      $sql = "SELECT * FROM `women_shoes` ";
		        $result=$conn->query($sql);
		        while($row = mysqli_fetch_assoc($result))
		        {
		    ?>	
		    	 <a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
		     	 <div class="col-sm">
		        
		          <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
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

		     <?php 
		      $sql = "SELECT * FROM `sarees` ";
		        $result=$conn->query($sql);
		        while($row = mysqli_fetch_assoc($result))
		        {
		    ?>
		    	 <a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
		     	 <div class="col-sm">
		        
		          <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
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

		     <?php 
		      $sql = "SELECT * FROM `men_shirt` ";
		        $result=$conn->query($sql);
		        while($row = mysqli_fetch_assoc($result))
		        {
		    ?>
		    	 <a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
		     	 <div class="col-sm">
		        
		          <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
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

		     <?php 
		      $sql = "SELECT * FROM `men_shoes` ";
		        $result=$conn->query($sql);
		        while($row = mysqli_fetch_assoc($result))
		        {
		    ?>
		    	 <a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
		     	 <div class="col-sm">
		        
		          <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
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

		     <?php 
		      $sql = "SELECT * FROM `wedding_wear` ";
		        $result=$conn->query($sql);
		        while($row = mysqli_fetch_assoc($result))
		        {
		    ?>
		    	 <a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
		     	 <div class="col-sm">
		        
		          <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
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

 	 <!-- Main Contents Ends -->

  </body>
</html>

<?php include("footer.php") ?>