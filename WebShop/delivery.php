<?php
	session_start();
	$e = $_GET['express'];
	$_SESSION['express'] = $e;
	$d = 1;

	header("Location: ../WebShop/cart.php?express=".$e."&delivery=".$d);
	
	if ($e == 1) {
		$_SESSION['product_price'] = $_SESSION['product_price'] + 5;
	}
?>