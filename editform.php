<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
</head>

<body>

  <?php
  require './config.php';
  
$id = $_POST ["id"];
$mysql = "select * from customer where id = $id";
$result = $conn->query($mysql);
$row = $result->fetch_assoc();

// lay tu cot cua co so du lieu 
$name = $row ["Name"];
$address = $row ["address"];
$mail = $row ["mail"];
$images = $row ["images"];
$video = $row ["video"];

  ?>

  <h2>Customer edit</h2>

  <form action="empliupdate.php" method="post">

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">id</span>
      </div>
      <input type="text" value="<?php echo $id; ?>" readonly name='id' class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
      </div>
      <input type="text" value="<?php echo $name; ?>" name='Name' class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
      </div>
      <input type="text" value="<?php echo $address; ?>" name='Address' class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">birthday</span>
      </div>
      <input type="date" name='birthday' class="form-control" value="<?php echo $birthday; ?>" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">mail</span>
      </div>
      <input type="text" value="<?php echo $name; ?>" name='Name' class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <button type='submit' name='emplinsert'>submmit</button>

  </form>

</body>

</html>