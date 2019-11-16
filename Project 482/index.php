<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pindo | Biggest Online Shop</title>
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

 	 <div class="parallax">
 	   <div class="container">	
 	 	<div class="row">
  
	      <div class="col-sm">
	          <form method="post" action="">
	            <div class="card card-body" style="width: 20rem; margin: 10px;">
	              <img class="card-img-top zoom img-responsive" src="images/demo.jpg"><br />

	              <h4 class="text-info">Navy-Blue Shirt</h4>

	              <h4 class="text-danger">৳ 1000.00</h4>
	              <b style="text-align: center;">Quantity</b>
	              <input type="number" name="quantity" value="1" class="form-control" />

	              <input type="hidden" name="hidden_name" value="" />

	              <input type="hidden" name="hidden_price" value="" />

	              <input type="submit" id="my-form" name="add_to_cart"  style="margin-top: 5px;" class="btn btn-primary" value="Add to Cart">
	            </div>

	          </form>
	        </div>

	        <div class="col-sm">
	          <form method="post" action="">
	            <div class="card card-body" style="width: 20rem; margin: 10px;">
	              <img class="card-img-top zoom img-responsive" src="images/demo.jpg"><br />

	              <h4 class="text-info">Navy-Blue Shirt</h4>

	              <h4 class="text-danger">৳ 1000.00</h4>
	              <b style="text-align: center;">Quantity</b>
	              <input type="number" name="quantity" value="1" class="form-control" />

	              <input type="hidden" name="hidden_name" value="" />

	              <input type="hidden" name="hidden_price" value="" />

	              <input type="submit" id="my-form" name="add_to_cart"  style="margin-top: 5px;" class="btn btn-primary" value="Add to Cart">
	            </div>

	          </form>
	        </div>

	        <div class="col-sm">
	          <form method="post" action="">
	            <div class="card card-body" style="width: 20rem; margin: 10px;">
	              <img class="card-img-top zoom img-responsive" src="images/demo.jpg"><br />

	              <h4 class="text-info">Navy-Blue Shirt</h4>

	              <h4 class="text-danger">৳ 1000.00</h4>
	              <b style="text-align: center;">Quantity</b>
	              <input type="number" name="quantity" value="1" class="form-control" />

	              <input type="hidden" name="hidden_name" value="" />

	              <input type="hidden" name="hidden_price" value="" />

	              <input type="submit" id="my-form" name="add_to_cart"  style="margin-top: 5px;" class="btn btn-primary" value="Add to Cart">
	            </div>

	          </form>
	        </div>

	        <div class="col-sm">
	          <form method="post" action="">
	            <div class="card card-body" style="width: 20rem; margin: 10px;">
	              <img class="card-img-top zoom img-responsive" src="images/demo.jpg"><br />

	              <h4 class="text-info">Navy-Blue Shirt</h4>

	              <h4 class="text-danger">৳ 1000.00</h4>
	              <b style="text-align: center;">Quantity</b>
	              <input type="number" name="quantity" value="1" class="form-control" />

	              <input type="hidden" name="hidden_name" value="" />

	              <input type="hidden" name="hidden_price" value="" />

	              <input type="submit" id="my-form" name="add_to_cart"  style="margin-top: 5px;" class="btn btn-primary" value="Add to Cart">
	            </div>

	          </form>
	        </div>

   		</div>
 	   </div>	
 	 </div>

 	 <!-- Main Contents Ends -->

 	 <?php include("footer.php") ?>

  </body>
</html>