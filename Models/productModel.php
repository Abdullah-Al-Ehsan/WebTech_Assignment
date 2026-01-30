<?php
require_once("dbConnection.php");

function insertProduct($name, $buy, $sell, $display)
{
    $con = getConnection();
    $sql = "INSERT INTO products VALUES('', '$name', '$buy', '$sell', '$display')";
    return mysqli_query($con, $sql);
}

function displayedProducts()
{
    $con = getConnection();
    $sql = "SELECT * FROM products WHERE display='Yes'";
    return mysqli_query($con, $sql);}

function getProductById($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM products WHERE id='$id'";
    return mysqli_query($con, $sql);}

function updateProduct($id, $name, $buy, $sell, $display)
{
    $con = getConnection();
    $sql = "UPDATE products 
            SET name='$name',
            buy='$buy',
            sell='$sell',
            display='$display'
            WHERE id=$id";
    return mysqli_query($con, $sql);
}

function deleteProduct($id)
{
    $con = getConnection();
    $sql = "DELETE FROM products WHERE id='$id'";
    return mysqli_query($con, $sql);
}


function searchProduct($name)
{
  $con = getConnection();
  $sql="SELECT * FROM products WHERE name LIKE '%$name%' AND display='Yes'";
  return mysqli_query($con,$sql);
}
