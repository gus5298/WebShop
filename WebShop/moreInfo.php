         <?php 
require('includes/conn.inc.php'); 
require('includes/functions.inc.php'); 
$sid = safeInt($_GET['id']);
$stmt = $pdo->prepare("SELECT * FROM items WHERE id = :id");
$stmt->bindParam(':id', $sid, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetchObject();
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
                  <a class="navbar-brand img" href="index.php#"><img src="img/logodrinks.png" class="img-responsive"
                    style="width: 160px; margin-top: -26px; margin-left: 20px"></a>
                     <a class="navbar-brand img" href="index.php#">Drinks Shop</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                                     
                    <li> <form method="get" action="/WebShop/cart.php">
                    <button type="submit" class="btn btn-default btn-sm"  style="width: 120px; height: 35px; margin-top: 9px;  margin-right:7px;"><span class="glyphicon glyphicon-shopping-cart">
                    </span> Shopping Cart</button></form>
                    </li>

                  </ul>
                </div>
              </div>
            </nav>
            <!--end of navbar-->
            </section>

      <div id="" class="container text-center">
      <div id="page">
            <div id="content">
                <?php
                echo "<h2>{$row->name}</h2>";
                echo "<p>$row->description</p>";
                echo "<p>$row->price &euro;</p>";
                echo "<p>id: $row->id</p>";
                echo "<img src=\"$row->picture\" alt=\"$row->name\" class=\"rightImg\">"
            
            ?>

            <form action="insertToCart.php" method="POST">
              <input name="quantity" type="hidden" value="1" />
              <input name="product_id" type="hidden" value="<?php echo "$row->id"; ?>" /> 
              <input name="product_name" type="hidden" value="<?php echo "$row->name"; ?>" /> 
              <input name="product_price" type="hidden" value="<?php echo "$row->price"; ?>" />
              <button class="add-button" type="submit">Add to Cart!</button>
            </form>

            </div>
            </div>  

      
      

    </div>
      </div>

    </body>

      <footer class="text-center" style="border-top: 3px solid #ccc;">
              <p>Created by: Gustavo Sanchez, Arjun Grewal and Francisco J. Garcia</p>
             <p>Contact information: <a href="mailto:gsanchezcollado@gmail.com">
              gsanchezcollado@gmail.com</a></p>
      </footer>
      </html>




