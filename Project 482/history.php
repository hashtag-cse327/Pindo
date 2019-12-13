<?php require_once("conn.php"); ?>
<?php 
	if ($_SESSION["authen"]){
		include("sidebar.php");
	} 
	else {
	}
?>
<?php include("header.php") ?>

<head>
	<title>History</title>

	<link rel="stylesheet" type="text/css" href="css/history.css">
</head>

<body >
	
	<h1 style="text-align: center; margin-top: 130px;">History</h1>
	<hr>

	<section>
		<table>
			<tr class="drop-shadow1">
				<th>Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Purchased Time and Date</th>
				<th></th>
			</tr>

			<?php 
				$user = $_SESSION["username"];
				$sql = "SELECT * FROM $user ORDER BY purchased_time DESC";
        		$result = mysqli_query($conn, $sql);

        		if (mysqli_num_rows($result) > 0) {
            		while($row = mysqli_fetch_assoc($result)) {
            ?>
            			<tr class="drop-shadow1">
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["quantity"]; ?></td>
							<td><?php echo $row["price"]; ?></td>
							<th colspan="2"><?php echo $row["purchased_time"]; ?></th>
						</tr>
            <?php   
            		}
        		} else {
           	?>		
           			<tr>
           				<td colspan="4"><?php echo "No items purchased yet!"; ?></td>
           			</tr>
           	<?php		
        		}
			?>
			
		</table>

		<div style="margin-top: 50px;"></div>
	</section>


	
</body>



<?php include("footer.php") ?>