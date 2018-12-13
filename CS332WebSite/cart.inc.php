<?php
require "storeHeader.php";

if(isset($_POST['cart-submit'])){
  require "dbh.inc.php";
  $bookISBN = $_POST['inputISBN'];
  $myID = $_SESSION['userID'];
  $_SESSION['myisbn'] = $bookISBN;
  $quantity = '1';

  $sql = "INSERT INTO cart (userid, isbn, qty) VALUES ('$myID','$bookISBN', '$quantity')";
  if (!mysqli_query($conn, $sql)){
    die('FAILURE!');
  }
  else{
    header("Location: ../storeCart.php?&isbn=".$bookISBN);
    exit();
  }
}

header("Location: ../bs2/storeBrowse.php");
exit();

?>
