    <?php
    // including the database connection file
   require('../includes/conn.inc.php');

     
    if(isset($_POST['update']))
    {    
        $id = $_POST['id'];
        
        $eventName=$_POST['eventName'];
        $eventDescription=$_POST['eventDescription'];
        $eventType=$_POST['eventType'];
        $eventDate = $_POST['eventDate'];    
        
       
        //updating the table
             $result = mysqli_query($conn, "UPDATE chessEvents SET eventName='$eventName',eventDescription='$eventDescription',eventType='$eventType', eventDate='$eventDate' WHERE id=$id");
            
        //redirectig to the display page. 
             header("Location: view.php");
        
    }


    ?>
    <?php
    //getting id from url
    $id = $_GET['id'];
     
    //
    $sql = "SELECT * FROM chessEvents WHERE id=$id";

    //selecting data associated with this particular id
    $result = mysqli_query($conn, $sql);

     
    while($res = mysqli_fetch_array($result)) 
    {
        $eventName = $res['eventName'];
        $eventDescription = $res['eventDescription'];
        $eventType = $res['eventType'];
        $eventDate = $res['eventDate'];
    }
    ?>

    <html>
    <head>
        <title>Edit Data</title>

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
        <a href="/WAD/index.php">Home<a><br/>
        <br/><br/>
        
        <div class="col-sm-1" style="margin-top: 60px">
        <form name="form1" method="post" action="edit.php">
            <table border="0">
                <tr> 
                    <td>eventName</td>
                    <td><input type="text" name="eventName" value="<?php echo $eventName;?>"></td>
                </tr>
                <tr> 
                    <td>eventDescription</td>
                    <td><input type="text" name="eventDescription" value="<?php echo $eventDescription;?>"></td>
                </tr>
                <tr> 
                    <td>eventType</td>
                    <td><input type="text" name="eventType" value="<?php echo $eventType;?>"></td>
                </tr>
                 <tr> 
                    <td>eventDate</td>
                    <td><input type="date" name="eventDate" value="<?php echo $eventDate;?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?> "></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
    </html>