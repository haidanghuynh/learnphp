<?php
ini_set('display_errors', value: '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$servername = "localhost:3307";
$username = "root";
$password = "root";
$dbname = "store";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
echo"ket noi thanh cong";

?>
