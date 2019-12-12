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
<body>
    <h1 style="margin-top: 200px;color: red;text-align: center;">Items will be delivered soon to your given address!</h1>
</body>
</html>

<?php
    
    if(isset($_POST["checkout"])){
        foreach($_SESSION["shopping_cart"] as $keys => $values) {
                $n = $values["item_name"];
                $q = $values["item_quantity"];
                $p = $values["item_price"];
                $i = $values["item_img"];
                $today = date("d-m-Y");
                $user = $_SESSION["username"];
                $sql = "INSERT INTO $user (name,quantity,price,image,purchased_time) 
                            VALUES ('$n','$q','$p','$i','$today')"; //keeping record for each user
                mysqli_query($conn,$sql);
        }
        unset($_SESSION["shopping_cart"]); //clearing cart
    }

    header("refresh:5; url=index.php");
 ?>

 <?php include("footer.php") ?>