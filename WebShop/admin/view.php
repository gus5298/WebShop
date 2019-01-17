        <?php
        //including the database connection file
       require('../includes/conn.inc.php');

        $result = mysqli_query($conn, "SELECT * FROM chessEvents ORDER BY id DESC"); 

        ?>
         
        <html>
        <head>
            <title>Hallam Chess</title>
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
          <form method="get" action="/WAD/admin/add.html">
                  <button type="submit"  style="width: 120px; height: 35px; margin-top: 7px;  margin-right:7px;">Add new data</button></form>
        </div> 

         <div class="col-sm-12" style="margin-top: 5px">
            <table class= "table" style=" border: 1px solid black;">
                  <tr bgcolor='#CCCCCC'>
                      <td>id</td>
                      <td>eventName</td>
                      <td>eventDescription</td>
                      <td>eventType</td>
                      <td>eventDate</td>
                      <td>Admin</td>
                  </tr>
          <?php

          $sql =  "SELECT `id`, `eventDate`, `eventName`, `eventDescription`, `eventLocation`, `eventType` FROM `chessEvents`";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              //output data of each row
              while($res = $result->fetch_assoc()) {
                  echo "<tr>";
                      echo "<td>".$res['id']."</td>";
                      echo "<td>".$res['eventName']."</td>";
                      echo "<td>".$res['eventDescription']."</td>";
                      echo "<td>".$res['eventType']."</td>";
                      echo "<td>".$res['eventDate']."</td>";
                      echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
              }

          } else {
              echo "0 results";
          }

          $conn->close();

          ?>
          </table>
          </div>
        </body>
        </html>