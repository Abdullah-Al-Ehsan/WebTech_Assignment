<?php
require_once '../Models/ProductModel.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];
} elseif (isset($_POST['id'])) 
{
    $id = $_POST['id'];
} else {
    echo "No product ID provided!";
    exit();
}

$result = getProductById($id);
$product = mysqli_fetch_assoc($result);
if (!$product) 
{
    echo "Product not found!";
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="../Controllers/ProductController.php">
<input type="hidden" name="id" value="<?php $product['id'] ?>">

<fieldset style="width:300px">
<legend><b>EDIT PRODUCT</b></legend>

Name<br>
<input type="text" name="name" value="<?php htmlspecialchars($product['name']) ?>"><br><br>

Buying Price<br>
<input type="number" name="buy" value="<?php $product['buying_price'] ?>"><br><br>

Selling Price<br>
<input type="number" name="sell" value="<?php $product['selling_price'] ?>"><br><br>

<hr>
<input type="checkbox" name="display" 
<?php ($product['display'] == 'Yes') ? 'checked' : '' ?>> Display
<hr>

<input type="submit" name="save" value="UPDATE">
</fieldset>
</form>

</body>
</html>