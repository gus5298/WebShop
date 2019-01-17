<?php 
// #includes
require('includes/conn.inc.php');
ini_set('display_errors', 1);

//to display all the images
$sql = "SELECT * FROM items";
$stmt = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticket Faster</title>
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:600px)" href="css/desktop.css">
    </head>
    
          
        <div id="container">
            <header>
			<div class="container">
			<div class="burgerMenu">
				<div class="menuLabel">Menu</div>
				<div class="bars">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>
			</div>
			</div>
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
                <h2>All Events</h2>
                <p>This will be the part where ther is text</p>
                <p>This will be the part where ther is text</p>
                <p>This will be the part where ther is text</p>
                <p>This will be the part where ther is text</p>
                <p>This will be the part where ther is text</p>
            </div>
			</div>
			
			<div class="imgGrid">
				<?php
				while($row =$stmt->fetchObject()){
                        echo '<div class="grid">';
                            echo "<div class=\"name\">{$row->name}</div>";
                            echo "<img src=\"{$row->picture}\">";


                            //MORE DETAILS BUTTON THAT PASSES THE ID
                            echo "<div class=\"preview\"><a href=\"#\" data-id=\"{$row->id}\"class=\"getPreview\">Preview</a>
                                  <a href=\"moreinfo.php?eventId={$row->id}\">More Details</a></div>";


						echo '</div>';
				}
				?>
			</div>

		</div>
        <footer>
            <p>Copyright &copy; 2018</p>
            <p><a href="admin.php" title="adminLogIn">CMS</a></p>
		</footer>
		<script src="scripts/jquery-3.2.1.min.js"></script>
		<script src="scripts/menu.js"></script>
    </body>
</html>