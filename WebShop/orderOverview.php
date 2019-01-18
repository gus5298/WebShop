<?php
require('includes/conn.inc.php');
session_start();
error_reporting(0);
@ini_set('display_errors', 0);
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
        
      <!-- poll -->
      <script>
      function getVote(int) {
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
            document.getElementById("poll").innerHTML=this.responseText;
          }
        }
        xmlhttp.open("GET","poll_vote.php?vote="+int,true);
        xmlhttp.send();
      }
      </script>
      <!-- end of poll -->

            </head>
           <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
            <section id="banner" class="banner">
              <!--navbar-->
            <nav class="navbar navbar-inverse navbar-fixed-top" ">
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
                    
                  
                    
                   <!--  <li> <form method="get" action="/WAD/admin/view.php">
                    <button type="submit"  style="width: 90px; height: 35px; margin-top: 7px;  margin-right:7px;">Admin</button></form>
                    </li> -->
                  </ul>
                </div>
              </div>
            </nav>
            <!--end of navbar-->
 <div  style="margin-top: 100px;">
    <h1>Order overview</h1><br>
  <p>Your order: </p>
  <table id="products" border="1px solid black">
    <tr>
      <td>Product name</td>
      <td>Price</td>
    </tr>
    <?php
      foreach ($_SESSION['product_name'] as $pn) {
        $sql = "SELECT price FROM items WHERE name = '$pn'";
        $stmt = $pdo->query($sql);
        $prodp = $stmt->fetch(pdo::FETCH_ASSOC);
        foreach ($prodp as $pp) {
          echo "<tr>";
          echo "<td>".$pn."</td>";
          echo "<td>".$pp."</td>";
        }
      }
    ?>
  </table><br>
  <?php

  $email = $_SESSION['email'];

  $sqlui = "SELECT id FROM users WHERE email = '$email'";
  $stmtui = $pdo->query($sqlui);
  $ui = (int)$stmtui;

  $desc = "";
  $conc = ", ";
  foreach ($_SESSION['product_name'] as $pn) {
    $desc = $desc.$pn.$conc;
  }

  $tp = $_SESSION['product_price'];

  $date = date('Y-m-d');

  $addr = $_SESSION['address'];

  $exp = $_SESSION['express'];
  if ($exp == "0") {
    echo "Normal delivery";
  } else {
    echo "Express delivery (+5€)";
  }

  $sql = "INSERT INTO orders (userId, description, totalPrice, date, address, express)
       VALUES ('$ui', '$desc', '$tp', '$date', '$addr', '$exp')";
  $stmt = $pdo -> query($sql);
  ?>

  <br>
  <br>
  <br>
  <h2>Thank you for your purchase</h2>
  <input type="button" name="refresh" onclick="refresh()" value="Click here to order again">
  <input type="button" name="logout" onclick="logout()" value="Click here to logout">

  <script type="text/javascript">
    function refresh() {
      window.location.href = "orderOverview.php";
    }

    function logout() {
      window.location.href = "logout.php";
    }
  </script>


 </div>
</body>
      <footer class="text-center" style="border-top: 3px solid #ccc;">
              <p>Created by: Gustavo Sanchez, Arjun Grewal and Francisco J. Garcia</p>
             <p>Contact information: <a href="mailto:gsanchezcollado@gmail.com">
              gsanchezcollado@gmail.com</a></p>
      </footer>
      </html>




