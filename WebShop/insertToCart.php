<?php
include('includes/conn.inc.php');
session_start();

$name = $_POST['product_name'];
array_push($_SESSION['product_name'], $name);
$price = $_POST['product_price'];
$_SESSION['product_price'] = $_SESSION['product_price'] + $price;
$quantity = $_POST['quantity'];
$_SESSION['quantity'] = $_SESSION['quantity'] + $quantity;

header("refresh:1; url=cart.php");
?>