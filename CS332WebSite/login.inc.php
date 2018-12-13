<?php
if(isset($_POST['login-submit'])){
  require "dbh.inc.php";

  $email = $_POST['loginEmail'];
  $password = $_POST['loginPwd'];

$sql = "SELECT * FROM members WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if($row = mysqli_fetch_assoc($result)){
  session_start();
  $_SESSION['userID'] = $row['userid'];
  $_SESSION['name'] = $row['fname'];
  header("Location: ../storeHome.php?login=success");
  exit();
}
else{
  header("Location: ../storeHome.php?error=nouser");
  exit();
}
}
else{
  header("Location: ../storeHome.php?");
  exit();
}

?>
