<?php require_once("conn.php"); ?>
<?php 
	if ($_SESSION["authen"]){
		include("sidebar.php");
	} 
	else {
	}
?>
<?php include("header.php") ?>
<?php 
	if (isset($_POST["ur_name"])==""){
	} 
	else {
	  include("sidebar.php");
	}
?>

<head>
	<title>History</title>

	<link rel="stylesheet" type="text/css" href="css/history.css">
</head>

<body >
	
	<h1 style="text-align: center; margin-top: 150px;">History</h1>
	<hr>

	<section>
		<table>
			<tr class="drop-shadow1">
				<th></th>
				<th>Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Purchased Time</th>
			</tr>
			<tr class="drop-shadow1">
				<td style="text-align: center;"><img src="images/demo.jpg"></td>
				<td>Shirt</td>
				<td>2</td>
				<td>300tk</td>
				<th>01-01-2019</th>
			</tr>

			
			<tr class="drop-shadow1">
				<td style="text-align: center;"><img src="images/demo.jpg"></td>
				<td>Shirt</td>
				<td>2</td>
				<td>300tk</td>
				<th>01-01-2019</th>
			</tr>
			
			
			<tr class="drop-shadow1">
				<td style="text-align: center;"><img src="images/demo.jpg"></td>
				<td>Shirt</td>
				<td>2</td>
				<td>300tk</td>
				<th>01-01-2019</th>
			</tr>
			
			
			
		</table>
	</section>


	
</body>



<?php include("footer.php") ?>