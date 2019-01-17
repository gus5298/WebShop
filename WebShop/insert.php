<?php
include('includes/conn.inc.php');

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$dob = $_POST['dob'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);


try {
	$sql= "INSERT INTO users (email, name, password, dob)
       VALUES ('$email', '$name', '$hashed_password', '$dob')";
       $stmt = $pdo -> query($sql);
   	   header("Location: ../WebShop/index.php");

} catch (Exception $e) {
   header("Location: ../WebShop/login.php");
   $message = "Email exisits";
	echo "<script type='text/javascript'>alert('$message');</script>";
}


/*
$to=$email;
$subject= "Thanks for registering my g!";
$from = 'agrewal12345@gmail.com';
$body='Thank you for registering to alcoholics anonymous!';
$headers = "From:".$from;
mail($to,$subject,$body,$headers);
*/



?>