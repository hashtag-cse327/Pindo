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
	<title>Pindo | Cart</title>
</head>
<body>

	<!--Cart Section Starts -->
  <div class="cart" id="cart">
    <div class="container" style="background-color: #ffffffb0; padding: 0;margin-top: 100px;">
  <div class="shadow-lg p-3 mb-5 bg-dark rounded"><h1 style="color: white;text-align: center;">CART</h1></div>

      
      <table class="table table-bordered">
            <tr>
              <th width="10%">Image</th>
              <th width="40%">Item Name</th>
              <th width="10%">Quantity</th>
              <th width="20%">Price</th>
              <th width="15%">Total</th>
              <th width="5%">Action</th>
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
              $total = 0;
              foreach($_SESSION["shopping_cart"] as $keys => $values) {
            ?>
            <tr>
              <td><img style="width: 100px;height: 100px;" class="card-img-top img-responsive" src="images/<?php echo $values["item_img"]; ?>"></td>
              <td><?php echo $values["item_name"]; ?></td>
              <td><?php echo $values["item_quantity"]; ?></td>
              <td>৳ <?php echo $values["item_price"]; ?></td>
              <td>৳ <?php echo number_format(($values["item_quantity"] * $values["item_price"]), 2);?></td>
              <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php $delivery=100; ?>
            <?php
                $total = $total + ($values["item_quantity"] * $values["item_price"]);
              }
            ?>
            <tr>
              <td colspan="3" align="right">Delivery Charge</td>
              <td colspan="2" align="right">৳ <?php echo $delivery; ?> </td>
              <td></td>
            </tr>
            <tr>
              <td colspan="3" align="right">Total</td>
              <td colspan="2" align="right" class="text-danger">৳ <?php echo number_format($total+$delivery, 2); ?></td>
              <td><form method="post" action="delivered.php"><button class="btn btn-primary" type="submit" name="checkout">Checkout</button></form></td>
            </tr>
            <?php
            }
            ?>
          </table>  
  </div>
  </div>


</body>
</html>

<?php include("footer.php") ?>
