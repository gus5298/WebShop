<?php 
require('includes/conn.inc.php'); 
require('includes/functions.inc.php'); 
$sid = safeInt($_GET['id']);
$stmt = $pdo->prepare("SELECT * FROM items WHERE id = :id");
$stmt->bindParam(':id', $sid, PDO::PARAM_INT);
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
            
			<div id="page">
            <div id="content">
                <?php
                echo "<h2>{$row->name}</h2>";
                echo "<p>$row->description</p>";
                echo "<p>$row->price</p>";
                echo "<p>$row->id</p>";
                echo "<img src=\"$row->picture\" alt=\"$row->name\" class=\"rightImg\">"
            
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