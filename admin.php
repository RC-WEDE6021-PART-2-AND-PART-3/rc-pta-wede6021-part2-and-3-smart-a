<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include("DBConn.php");

// APPROVE USER
if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    $conn->query("UPDATE tblUser SET status='approved' WHERE userID=$id");
}

// DELETE USER
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM tblUser WHERE userID=$id");
}

// FETCH USERS
$result = $conn->query("SELECT * FROM tblUser");
?>

<h2>Admin Panel</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Username</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['userID']; ?></td>
    <td><?php echo $row['fullName']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <a href="?approve=<?php echo $row['userID']; ?>">Approve</a> |
        <a href="?delete=<?php echo $row['userID']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>