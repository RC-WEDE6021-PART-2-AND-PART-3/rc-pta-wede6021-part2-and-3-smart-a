<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$_SESSION['role'] = $row['role'];

include("DBConn.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM tblUser 
            WHERE username='$username' 
            AND password='$password' 
            AND status='approved'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $_SESSION['username'] = $row['username'];
        $_SESSION['fullName'] = $row['fullName'];

        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Invalid login or not approved";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>

<p><?php echo $message; ?></p>

</body>
</html>