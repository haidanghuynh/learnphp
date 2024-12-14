<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>

<body>
    <div class="container">
        <h1>Thêm khách hàng</h1>
        <form action="update.php">
            <div class="mb-3 mt-3">
                <label for="id" class="form-label">Id:</label>
                <input type="number" class="form-control" id="id" placeholder="Enter Id" name="id">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Name:</label>
                <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="name">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Address:</label>
                <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="address">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Mail:</label>
                <input type="text" class="form-control" id="Mail" placeholder="Enter Mail" name="mail">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Images:</label>
                <input type="file" class="form-control" id="Images" placeholder="Enter Mail" name="images">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Video:</label>
                <input type="file" class="form-control" id="Video" placeholder="Enter Video" name="video">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>