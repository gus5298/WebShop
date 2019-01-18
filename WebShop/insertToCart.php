<?php
include('includes/conn.inc.php');
session_start();
error_reporting(0);
@ini_set('display_errors', 0);

$name = $_POST['product_name'];
array_push($_SESSION['product_name'], $name);
$price = $_POST['product_price'];
$_SESSION['product_price'] = $_SESSION['product_price'] + $price;
$quantity = $_POST['quantity'];
$_SESSION['quantity'] = $_SESSION['quantity'] + $quantity;
$_SESSION['express'] = 0;
header("refresh:1; url=cart.php?express=0");
?>