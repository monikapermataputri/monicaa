<?php 
require 'koneksi.php';
$result = mysqli_query($conn,'SELECT * FROM `login`');
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h2>Data List</h2>
        <ul id="data-list" class="list-group"></ul>

        <h2>Add Data</h2>
        <form id="add-form" action="create.php" method="POST">
            <div class="form-group">
                <label for="nama">Name:</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Data</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
