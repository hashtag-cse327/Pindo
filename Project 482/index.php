<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pindo | Biggest Online Shop</title>
  </head>
 
  <body>	

  	<!--Slideshow Starts -->
	  <div class="container">
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

 	 <!-- SideBar Starts -->

 	 <div class="sidebar">
 	 	<h3>Profile</h3>

 	 	<img src="images/profile.png">

 	 	<div class="container">
 	 		<div class="profile">
 	 			<ul>
 	 				<li><a href="#">Cart</a></li>
 	 				<li><a href="#">Offers</a></li>
 	 				<li><a href="#">History</a></li>
 	 				<li><a href="#">Login</a></li>
 	 			</ul>
 	 		</div>
 	 	</div>

 	 </div>

 	 <!-- SideBar Ends -->

 	 <!-- SideBar 2 Starts -->
 	 <div class="sidebar2">
 	 	<img src="images/side.jpg">
 	 </div>

 	 <!-- SideBar 2 Ends -->

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
  




 	 <script type="text/javascript">
 	 	document.getElementById("demo1").innerHTML = Date();
 	 </script>


  	



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>