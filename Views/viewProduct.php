<?php
require_once '../Models/productModel.php';
$result = displayedProducts();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
</head>

<body>

<fieldset style="width:500px">
<legend><b>SEARCH</b></legend>
<input type="text" id="search" onkeyup="searchProduct()">
</fieldset>

<br>

<fieldset style="width:500px">
<legend><b>DISPLAY</b></legend>

<div id="productTable">
<table border="1" width="100%">
<tr>
    <th>NAME</th>
    <th>PROFIT</th>
    <th>ACTION</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result))
{
    $profit = $row['sell'] - $row['buy'];
?>
<tr>
    <td><?php htmlspecialchars($row['name']) ?></td>
    <td><?php $profit ?></td>
    <td>
      <a href="editProductView.php?id=<?php $row['id'] ?>">Edit</a>
      |
      <a href="" onclick="deleteProduct(<?php $row['id'] ?>); return false;">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
</div>
</fieldset>

<script src="../Assets/product_ajax.js"></script>

</body>
</html>