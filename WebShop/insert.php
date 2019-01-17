<?php
include('includes/conn.inc.php');

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$dob = $_POST['dob'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);


/*//CHECK IF EMAIL ALREADY| EXISTS IN DATABASE 
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email address'); // Use your own error handling ;)
}
$select = mysqli_query($myConnection, "SELECT `email` FROM `users` WHERE `email` = '$email'") or exit(mysqli_error($myConnection));

if(mysqli_num_rows($select)) {
    exit('This email is already being used');
}
	*/

$sql= "INSERT INTO users (email, name, password, dob)
       VALUES ('$email', '$name', '$hashed_password', '$dob')";

$stmt = $pdo->query($sql);

/*$to=$email;
$subject= "Thanks for registering my g!";
$from = 'agrewal12345@gmail.com';
$body='Thank you for registering to alcoholics anonymous!';
$headers = "From:".$from;
mail($to,$subject,$body,$headers);*/

header("refresh:1; url=index.php");
?>