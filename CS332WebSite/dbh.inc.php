<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpswd = "";
$dbschema = "bookstore";
$conn = mysqli_connect($dbhost,$dbuser,$dbpswd,$dbschema);

if(!$conn){
  die("Connection Failed: ". mysqli_connect_error());
}
?>
