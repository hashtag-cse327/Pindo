<?php require_once("conn.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script>
    	$(document).ready(function(){
			setInterval(function(){
				$('#demo1').load('header.php')
			}, 1000);
		});
    </script>

</head>
<body>
	<!--Header Starts -->
	<header>
	    
	    <div class="progress-container">
	      <div class="progress-bar" id="myBar"></div>
	    </div> 
	       
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	    	<a class="navbar-brand" href="index.php"> <img src="images/logo.png"> </a>
	    	
	    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      	<span class="navbar-toggler-icon"></span>
	    	</button>

	    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	      		<ul class="navbar-nav ml-auto">
	        		<li class="nav-item">
	        			<p class="nav-link" id="demo1">Date</p>
	        		</li>
	        		<!-- <li class="nav-item">
	          			<a class="nav-link" href="#cart" style="scroll-behavior: smooth;"><i class="fas fa-shopping-cart"></i></a>
	        		</li> -->
			        <li class="nav-item active">
			          	<a class="nav-link" href="index.php" style="scroll-behavior: smooth;">Home <span class="sr-only">(current)</span></a>
			        </li>
			        <li class="nav-item">
			          	<a class="nav-link" href="aboutus.php">About Us</a>
			        </li>
	        		<li class="nav-item dropdown">
	          			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            		Catagory
	          			</a>
	          			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	            			<div class="dropdownn">
							  <button class="dropbtn" onmouseover="arrow()" onmouseout="noarrow()" id="men" >Men's Collection </button>
							  <div class="dropdown-content">
							    <a href="shirts.php">Shirts/T-Shirts</a>
							    <a href="pants.php">Pants/Trousers</a>
							    <a href="shoes.php">Shoes/Sandals</a>
							  </div>
							</div>
							<div class="dropdown-divider"></div>
	            			<div class="dropdownn">
							  <button class="dropbtn" onmouseover="arrow1()" onmouseout="noarrow1()" id="wmen">Women's Collection</button>
							  <div class="dropdown-content">
							    <a href="weddingwear.php">Wedding Wear</a>
							    <a href="sarees.php">Sarees</a>
							    <a href="sandals.php">Sandals</a>
							  </div>
							</div>
	            			<div class="dropdown-divider"></div>
	            			<a class="dropdown-item" href="latest.php">Latest Collection</a>
	          			</div>
	        		</li>
	        		<li class="nav-item">
	        			<?php 
	        				if ($_SESSION["authen"]){
	        			 ?>		
	        			 		<a  class="nav-link" href="#">Welcome, <?php echo $_SESSION["fn"]; ?>! </a>
	        			<?php 
	        			}
	        			else { ?>
	        				<a  class="nav-link" href="login.php">Login</a>
	        			<?php } ?>

	        		</li>
	      		</ul>
	      
	      		<form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
	        		<input class="form-control mr-sm-2" type="search" name="query" placeholder="Search your attire here" aria-label="Search">
	        		<button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="search" data-toggle="tooltip" data-placement="left" >Search</button>
	      		</form>
	    	</div>
	  	</nav>

	</header>
  	<!--Header Ends -->

  	<script type="text/javascript">
 	 	document.getElementById("demo1").innerHTML = Date();

 	 	function arrow(){
 	 		document.getElementById("men").innerHTML = "Men's Collection ⇣";
 	 	}

 	 	function noarrow(){
 	 		document.getElementById("men").innerHTML = "Men's Collection ";
 	 	}

 	 	function arrow1(){
 	 		document.getElementById("wmen").innerHTML = "Women's Collection ⇣";
 	 	}

 	 	function noarrow1(){
 	 		document.getElementById("wmen").innerHTML = "Women's Collection ";
 	 	}

 	 </script>

  	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>