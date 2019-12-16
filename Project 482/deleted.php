
<?php ob_start(); include("header.php"); ?>

<!DOCTYPE html>
<html>
<body>
	<?php if ($_SESSION["authen"]){ ?>
    <h1 style="margin-top: 200px;color: red;text-align: center;">Your account deleted successfully! We will be waiting for you! </h1>
    <div style="text-align: center;">
        <img style="height: 400px;" src="images/back.jpg">
    </div>
</body>
</html>

<?php
    header("refresh:5; url=index.php");
    ob_end_flush();
}
else {
  ?>
  <h1 style="margin-top: 200px;color: red;text-align: center;"> You are not logged in! </h1>
  <?php
  }
  ?>
 <?php include("footer.php") ?>