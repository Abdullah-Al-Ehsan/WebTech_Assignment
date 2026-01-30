<?php
require_once '../Models/ProductModel.php';

$id = $_POST['id'];
deleteProduct($id);

echo "deleted";
?>