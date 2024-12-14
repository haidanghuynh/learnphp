<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<center><a class="btn btn-primary" href="./insertform.php">INSERT THÔNG TIN</a></center>
<?php

$sql = 'SELECT * FROM `customer`;';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2 class='abc'>Danh sach khach hang</h2>";
    echo '<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>mail</th>
        <th>images</th>
        <th>video</th>
      </tr>
    </thead>
    <tbody>';
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $id = $row["Id"];
        $name = $row["Name"];
        $address = $row["address"];
        $mail = $row["mail"];
        $images = $row["images"];
        $video = $row["video"];

        echo "<tr>
    <td>$id</td>
    <td>$name</td>
    <td>$address</td>
    <td>$mail</td>
    <td>$images</td>
    <td>$video</td>
    <td><img src='images/$images'></td>
    <td>
    <video width='320' height='240' controls><source src='./video/$video' type='video/mp4'></video></td>
    <td>
    <form  action='delete.php' method='post'><input type='hidden' name='delete' value='$id'><button type='submit' name='submit' value='submit'>delete</button></form></td>
    <td><form action='editform.php' method='post'><input type='hidden' value='$id' name='id'> <input type='hidden' value='$name' name='name'> <input type='submit' value='chinh sua'></form></td></tr>";
    }
    echo '</tbody></table>';
} else {
    echo "0 results";
}


?>

<body>

</body>

</html>