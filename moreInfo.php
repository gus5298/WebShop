<?php 
require('includes/conn.inc.php'); 
require('includes/functions.inc.php'); 
$sEventID = safeInt($_GET['eventId']);
$stmt = $pdo->prepare("SELECT * FROM events 
                       JOIN eventVenue ON events.eventLocation = eventVenue.venueId
                       /*dont think you need this join gustavo, just check the itemID*/
                       WHERE eventId = :eventId");
$stmt->bindParam(':eventId', $sEventID, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetchObject();
?>




<!DOCTYPE HTML>
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
                <?php
                echo "<h2>{$row->eventName}</h2>";
                echo "<p>$row->venueName</p>";
                echo "<p>$row->eventPrice</p>";
                echo "<p>$row->eventId</p>";
                echo "<img src=\"images/$row->eventImage\" alt=\"$row->eventName\" class=\"rightImg\">"
            
            ?>
            </div>
			</div>  
<div>
</div>
</section>

<footer>
<p>Copyright &copy; 2018</p>
<p><a href="admin.php" title="adminLogIn">CMS</a></p>
</footer>

</div>

<script src="scripts/jquery-3.2.1.min.js"></script>

<script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBVemMaTbOgNd5qZUDD1x6QC5VxfaqQyS0&sensor=true">
</script>

<script src="scripts/details.js"></script>



</body>
</html>