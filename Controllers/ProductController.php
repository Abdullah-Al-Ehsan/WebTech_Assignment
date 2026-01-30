<?php
require_once '../Models/ProductModel.php';

if (isset($_POST['save']))
{
    $name = $_POST['name'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';

    insertProduct($name, $buy, $sell, $display);
    header("Location: ../Views/ViewProduct.php");
}
