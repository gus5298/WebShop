
<?php
require('includes/conn.inc.php');

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticket Faster</title>
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:601px)" href="css/desktop.css">
	</head>
	
	<div id="container">
            <header>
                <div id="logo">
                    <h1><a href="index.php"><img src="images/newLogo.png" width="250" height="75"></a></h1>
                </div>

                <nav>
                    <ul>
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li><a href="allEvent.php" title="All Events">All Events</a></li>
                    <li><a href="genre.php" title="Genre">Genre</a></li>
                    <li><a href="contact.php" title="Contact Us">Contact Us</a></li>
                    <li><a href="search.php" title="Search">Search</a></li>
                    <li><a href="login.php" title="Login">Log In</a></li>
                    </ul>
                </nav>
            </header>
        <div id="page">
            <div id="content">
				<h2>Register</h2>

				<form action="insert.php" method="post" >
                  
                  <label for="name">Enter your full name: </label>
                  <input name="name" type="text">
                  <br>

                  <label for="password">Enter Password</label>
                  <input name="password" type="password">
                  <br>

                  <label for="email">Email: </label>
                  <input name="email" type="text">
                  <br>

                  <label for="dob">date of birth </label>
                  <input name="dob" type="date">
                  <br>

				  <input type="submit" value="Register">

</form>
		
            </div>
        </div>

<body>
</body>
</html>