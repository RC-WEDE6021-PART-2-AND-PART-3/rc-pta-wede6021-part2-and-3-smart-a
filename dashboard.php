<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            text-align: center;
        }
        .box {
            margin-top: 100px;
        }
        a {
            display: block;
            margin: 10px;
            padding: 10px;
            background: #007BFF;
            color: white;
            text-decoration: none;
            width: 200px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 5px;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Welcome <?php echo $_SESSION['fullName']; ?></h2>

    <a href="products.php">View Products</a>
    <a href="admin.php">Admin Panel</a>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>