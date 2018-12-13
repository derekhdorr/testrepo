<?php
if(isset($_POST['signup-submit'])){
  require "dbh.inc.php";

  $fname = $_POST['inFname'];
  $lname = $_POST['inLname'];
  $address = $_POST['inAddress'];
  $city = $_POST['inCity'];
  $state = $_POST['inState'];
  $zip = $_POST['inZip'];
  $phone = $_POST['inPhone'];
  $email = $_POST['inEmail'];
  $password = $_POST['inPwd'];
  $creditcard = $_POST['inCredit'];
  $query = "SELECT * FROM members;";
  $result = mysqli_query($conn, $query);
  $rows = mysqli_num_rows($result);
  $userid = $rows;

  $sql = "INSERT INTO members (userid, fname, lname, address, city, state, zip, phone, email, password, creditcardnumber) VALUES ('$userid','$fname','$lname','$address','$city','$state','$zip', '$phone', '$email', '$password', '$creditcard')";

  if(!mysqli_query($conn, $sql)){
    die('FAILURE!');
  }
  else{
    $newrecord = "SUCCESS!";
  }
}
else{
  header("Location: ../bs2/signUp.php");
  exit();
}
header("Location: ../bs2/logIn.php?&userid=".$userid);
exit();
?>
