
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
				<h2>LOGIN</h2>

             <form action="checkLogin.php" method="post" >

                  <label for="email">email</label>
                  <input name="email" type="text">

                  <label for="password">Password</label>
                  <input name="userPassword" type="password">

                  <input type="Submit" value="submit">

                    <br>
                  <a href="register.php" title="Register"></br>Register</a>
</form>
		
            </div>
        </div>
        <footer>
            <p>Copyright &copy; 2018</p>
            <p><a href="admin.php" title="adminLogIn">CMS</a></p>
		</footer>
</html>