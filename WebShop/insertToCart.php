<?php
include('includes/conn.inc.php');
session_start();

$name = $_POST['product_name'];
$price = $_POST['product_price'];

$email = $_SESSION['email'];
$stmtu = $pdo->query("SELECT id FROM users WHERE email = '$email'");
$stmtu->execute();
$user_id = (int)$stmtu;

$sql= "INSERT INTO cart (product_name, product_price, user_id)
       VALUES ('$name', '$price', '$user_id')";

$stmt = $pdo->query($sql);

header("refresh:1; url=cart.php");
?>