<?php require_once("conn.php"); ?>
<?php 
	if ($_SESSION["authen"]){
		include("sidebar.php");
	} 
	else {
	}
?>
<?php include("header.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pindo | Search Results</title>
	<style type="text/css">
		.list{
			font-size: 20px;
			color: #0062cc;
			font-weight: 600;
            border: 2px solid black;
            padding: 10px;
            margin: 10px;
            width: 50%;
            text-align: center;
		}
	</style>
</head>
<body style="background: #f4e9e9;">
	<h1 style="margin-top: 150px;margin-bottom: 80px;text-align: center;">Search Results</h1>
    <div class="result" style="margin-left: 30%;margin-bottom: 50px;"> 
    	
    <?php
    $query = $_POST['query']; 
    // gets value sent over search form
    $min_length = 3;
    // you can set minimum length of the query if you want
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection
        $sql = "SELECT name,id,image,price FROM men_shoes
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($row = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
                <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
             	</a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
           
        }
         
    }
    else{ // if query length is less than minimum        
    }

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection
        $sql = "SELECT name,id,image,price FROM men_pants
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($row = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
                <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
             	</a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
            
        }
         
    }
    else{ // if query length is less than minimum        
    }

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection
        $sql = "SELECT name,id,image,price FROM men_shirt
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($row = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
                <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
             	</a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
           
        }
         
    }
    else{ // if query length is less than minimum        
    }

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection
        $sql = "SELECT name,id,image,price FROM wedding_wear
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($row = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
                <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
             	</a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
            
        }
         
    }
    else{ // if query length is less than minimum        
    }

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection
        $sql = "SELECT name,id,image,price FROM sarees
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($row = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
               <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
             	</a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
            
        }
         
    }
    else{ // if query length is less than minimum        
    }

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        $query = mysqli_real_escape_string($conn,$query);
        // makes sure nobody uses SQL injection
        $sql = "SELECT name,id,image,price FROM women_shoes
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($row = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="product.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["name"]; ?>&pic=<?php echo $row["image"]; ?>&price=<?php echo $row["price"]; ?>">
                <div class="list"><i class="fas fa-hand-point-right"></i><?php echo $row["name"]; ?></div>
             	</a>
             <?php
            }
        }
        else{ // if there is no matching rows do following
          
        }
         
    }
    else{ // if query length is less than minimum        
    }
?>

</div>


</body>
</html>





<?php include("footer.php") ?>