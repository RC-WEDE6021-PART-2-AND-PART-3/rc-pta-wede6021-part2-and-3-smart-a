<?php
$conn = new mysqli("localhost", "root", "", "PastimesDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>