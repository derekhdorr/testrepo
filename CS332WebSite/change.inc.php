<?php
require "storeHeader.php";
require "dbh.inc.php";

if(isset($_POST['change-submit'])){
$quantity = $_POST['new-quantity'];
$myISBN = $_POST['inISBN'];
$myID = $_SESSION['userID'];

if($quantity==0){
  $sql = "DELETE FROM cart WHERE isbn = '$myISBN' AND userid = '$myID'";
  if(!mysqli_query($conn, $sql)){
    die("Failure!");
  }
  else{
    header("Location: ../storeCart.php");
    exit();
  }
}
else{
$sql = "UPDATE cart SET qty = '$quantity' WHERE isbn = '$myISBN' AND userid = '$myID'";
if(!mysqli_query($conn, $sql)){
  die("Failure!");
}
else{
  header("Location: ../storeCart.php");
  exit();
}
}
}
else{
  header("Location: ../storeCart.php?error=whoops");
  exit();
}

?>
