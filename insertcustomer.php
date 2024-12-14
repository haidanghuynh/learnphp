<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'config.php';




$target_dir = "anh/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

$target_dir = "video/";
$target_file = $target_dir . basename($_FILES["video"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["video"]["name"])) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}


$id = $_POST["ID"];
$name = $_POST["Name"];
$address = $_POST["address"];
$mail = $_POST["mail"];
$anh = $_FILES["image"]["name"];
$video = $_FILES["video"]["name"];

$sql = "INSERT INTO customer (Id, Name, address, mail, images, video) VALUES ('$id','$name','$address','$mail','$anh','$video')";
//var_dump($sql);die;


if ($conn->multi_query($sql) === TRUE) {

    header("Location: ./customer.php"); //kết nối đổ vào bảng dữ liệu 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
