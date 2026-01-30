<?php
require_once '../Models/ProductModel.php';

$name = $_POST['name'];
$result = searchProduct($name);
?>

<table border="1" width="100%">
<tr>
    <th>NAME</th>
    <th>PROFIT</th>
    <th>ACTION</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) {
    $profit = $row['sell'] - $row['buy'];
?>
<tr>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= $profit ?></td>
    <td>
      <a href="editProductView.php?id=<?= $row['id'] ?>">Edit</a>
      |
      <a href="" onclick="deleteProduct(<?= $row['id'] ?>); return false;">Delete</a>
    </td>
</tr>
<?php } ?>
</table>