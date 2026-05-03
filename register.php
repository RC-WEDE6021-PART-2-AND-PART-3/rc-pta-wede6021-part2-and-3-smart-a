<?php
include("DBConn.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO tblUser (fullName, email, username, password, status)
            VALUES ('$fullName', '$email', '$username', '$password', 'pending')";

    if ($conn->query($sql) === TRUE) {
        $message = "Registered successfully! Waiting for admin approval.";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<h2>Register</h2>

<form method="POST">
    Full Name: <input type="text" name="fullName" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Register</button>
</form>

<p><?php echo $message; ?></p>