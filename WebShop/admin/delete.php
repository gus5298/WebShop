		<?php

		//including the database connection file
		require('../includes/conn.inc.php');

		 
		//getting id of the data from url
		$id = $_GET['id'];
		 
		//deleting the row from table
		$result = mysqli_query($conn, "DELETE FROM chessEvents WHERE id=$id");
		 
		//redirecting to the display page (index.php in our case)
		header("Location:view.php");

		?>