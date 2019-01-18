<?php 
// #includes
require('includes/conn.inc.php');


  session_start();
  $found=false;
  if($_SESSION["login"]==1){
    $found=true;
  }
  if($found==false){
    header("Location: ../Webshop/login.php");
  }

if (isset($_GET['search'])){
  $searchTerm = "%" . $_GET['search'] . "%";
  $sql= "SELECT * FROM items
        WHERE (name LIKE :search OR price LIKE :search)"; /* could add genre */
  $stmt2 = $pdo->prepare($sql);
  $stmt2->bindParam(':search', $searchTerm, PDO::PARAM_STR);
  $stmt2->execute();
}


ini_set('display_errors', 1);

//to display all the images
$sql = "SELECT * FROM items";
$stmt = $pdo->query($sql);
?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
              <title>Drinks Shop</title>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <script type="text/javascript" src="http://www.chessstrategyonline.com/js/widgets.min.js"></script>
              <link rel="stylesheet" type="text/css" href="css/style.css">
        
      

            </head>
            <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
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
                  <a class="navbar-brand img" href="index.php"><img src="img/logodrinks.png" class="img-responsive"
                    style="width: 160px; margin-top: -26px; margin-left: 20px"></a>
                     <a class="navbar-brand img" href="#">Drinks Shop</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">

                    <li>
                    <form id="form1" name="form1" method="get" action=""class="form-inline" style="margin-top: 9px;">
                        <input name="search" type="text" id="search" class="form-control">
                        <input type="submit" name="submit" value="search">
                    </form>
                    </li>

                    <li><a href="logout.php">Logout</a></li>

                    <li>
                    <button type="submit" class="btn btn-default btn-sm"  style="width: 120px; height: 35px; margin-top: 9px;  margin-right:7px;" onclick="goToCart()"><span class="glyphicon glyphicon-shopping-cart">
                    </span> Shopping Cart</button>
                    </li>
                    
                    <script type="text/javascript">
                      function goToCart() {
                        window.location.href = "http://localhost/WebShop/cart.php?express=0";
                      }
                    </script>
                    
          
                  </ul>
                </div>
              </div>
            </nav>
            <!--end of navbar-->
            </section>

      <div id="" class="container text-center">
      <div id="spirits">
            <div id="drinks">
                <h2>Our Products</h2>

            </div>
      </div>

      <div class="imgGrid">
        
      
        <?php

        if (isset($_GET['search'])){
                    while($row =$stmt2->fetchObject()){
                         echo "<div class=\"name\">{$row->name}</div>";
                            echo "<img src=\"{$row->picture}\">";

                            //MORE DETAILS BUTTON THAT PASSES THE ID
                            echo "<div class=\"preview\">
                                  <a href=\"moreinfo.php?id={$row->id}\">More Details</a></div>";
            echo '</div>';
        }
      }
      else{

        while($row =$stmt->fetchObject()){
                        echo '<div class="grid">';
                            echo "<div class=\"name\">{$row->name}</div>";
                            echo "<img src=\"{$row->picture}\">";


                            //MORE DETAILS BUTTON THAT PASSES THE ID
                            echo "<div class=\"preview\">
                                  <a href=\"moreinfo.php?id={$row->id}\">More Details</a></div>";


            echo '</div>';
        }
      }
        ?>
        
    </div>
      </div>

    
     
      
    </body>

      <footer class="text-center" style="border-top: 3px solid #ccc;">
              <p>Created by: Gustavo Sanchez, Arjun Grewal and Francisco J. Garcia</p>
             <p>Contact information: <a href="mailto:gsanchezcollado@gmail.com">
              gsanchezcollado@gmail.com</a></p>
      </footer>
      </html>




