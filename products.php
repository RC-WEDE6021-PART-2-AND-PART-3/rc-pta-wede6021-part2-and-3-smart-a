<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include("DBConn.php");

$result = $conn->query("SELECT * FROM tblClothes");
?>

<h2>Available Clothes</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Item Name</th>
    <th>Brand</th>
    <th>Price</th>
    <th>Image</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['itemID']; ?></td>
    <td><?php echo $row['itemName']; ?></td>
    <td><?php echo $row['brand']; ?></td>
    <td>R<?php echo $row['price']; ?></td>
    <td>
        <img src="../images/<?php echo $row['image']; ?>" width="100">
    </td>
</tr>
<?php } ?>
</table>