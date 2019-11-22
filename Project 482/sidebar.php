<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
</head>
<body>
	<!-- SideBar Starts -->

 	 <div class="sidebar" id="mySidebar">
 	 	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 	 	

 	 	<img src="images/d2.jpg">

 	 	<div class="container">
 	 		<div class="profile">
 	 			<ul>
 	 				<li><a href="#">Cart</a></li>
 	 				<li><a href="#">Offers</a></li>
 	 				<li><a href="history.php">History</a></li>
 	 				<li><a href="#">Logout</a></li>
 	 			</ul>
 	 		</div>
 	 	</div>
 	 </div>

 	 <!-- SideBar Ends -->
 	 <button class="openbtn" onclick="openNav()">☰</button>
 	 <!-- SideBar 2 Starts -->
 	 <div class="sidebar2">
 	 	
 	 </div>

 	 <!-- SideBar 2 Ends -->

 	 <script>
		function openNav() {
		  document.getElementById("mySidebar").style.width = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidebar").style.width = "0";
		}
	</script>

</body>
</html>