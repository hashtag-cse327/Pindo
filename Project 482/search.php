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
		.result p{
			font-size: 20px;
			color: #0062cc;
			font-weight: 600;
		}
	</style>
</head>
<body style="background: #f4e9e9;">
	<h1 style="margin-top: 150px;margin-bottom: 80px;text-align: center;">Search Results</h1>
    <div class="result" style="margin-left: 20%;"> 
    	
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
        $sql = "SELECT name FROM men_shoes
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="shoes.php">
                <p><i class="fas fa-hand-point-right"></i><?php echo $results["name"]; ?></p>
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
        $sql = "SELECT name FROM men_pants
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="pants.php">
                <p><i class="fas fa-hand-point-right"></i><?php echo $results["name"]; ?></p>
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
        $sql = "SELECT name FROM men_shirt
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="shirts.php">
                <p><i class="fas fa-hand-point-right"></i><?php echo $results["name"]; ?></p>
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
        $sql = "SELECT name FROM wedding_wear
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="weddingwear.php">
                <p><i class="fas fa-hand-point-right"></i><?php echo $results["name"]; ?></p>
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
        $sql = "SELECT name FROM sarees
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="sarees.php">
                <p><i class="fas fa-hand-point-right"></i><?php echo $results["name"]; ?></p>
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
        $sql = "SELECT name FROM women_shoes
            WHERE (`name` LIKE '%".$query."%')" or die(mysql_error());
        $raw_results = mysqli_query($conn,$sql);
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             ?>
             	<a href="sandals.php">
                <p><i class="fas fa-hand-point-right"></i><?php echo $results["name"]; ?></p>
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