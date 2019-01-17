    <html>
    <head>
        <title>Add Data</title>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <section id="banner" class="banner">
            <!--navbar-->
          <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand img" href="/WAD/index.php"><img src="/WAD/img/logo2.png" class="img-responsive"
                  style="width: 160px; margin-top: -10px;"></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="/WAD/index.php">HOME</a></li>
                  <li><a href="/WAD/index.php#about">About Us</a></li>
                  <li><a href="/WAD/index.php#events">Events</a></li>
                  <li><a href="WAD/index.php#news">Chess News</a></li>
                  <li><a href="/WAD/index.php#play">Play Chess</a></li>
                  <li> <form method="get" action="/WAD/admin/view.php">
                  <button type="submit"  style="width: 90px; height: 35px; margin-top: 7px;  margin-right:7px;">Admin</button></form>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!--end of navbar-->
          </section>


    <div class="col-sm-1" style="margin-top: 60px">

    <?php
    //including the database connection file
    require('../includes/conn.inc.php');
     

        $eventName=$_POST['eventName'];
        $eventDescription = $_POST['eventDescription'];
        $eventType = $_POST['eventType'];
        $eventDate = $_POST['eventDate'];

            $result = mysqli_query($conn, "INSERT INTO chessEvents(eventName,eventDescription,eventType, eventDate) VALUES('$eventName','$eventDescription','$eventType', '$eventDate')");
            
            //display success message
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='view.php'>View Result</a>";
    ?>

    </div>
    </body>
    </html>