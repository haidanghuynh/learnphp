<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
require 'config.php';
//var_dump($_POST);die;

//var_dump($_POST);die;
    $id = $_POST["delete"];

    $sql = "UPDATE bill 
    SET idcustomer = NULL
    WHERE idcustomer = $id ; DELETE FROM customer WHERE Id = $id ";
//var_dump($sql);die;
    if ($conn->multi_query($sql) === TRUE) {

        header("Location: ./customer.php"); //kết nối đổ vào bảng dữ liệu 

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

