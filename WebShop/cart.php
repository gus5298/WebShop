            <?php
            require('includes/conn.inc.php');
            session_start();
            $found=false;
            if($_SESSION["login"]==1){
            $found=true;
            }
            if($found==false){
            header("Location: ../Webshop/login.php");
            }
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

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
            </head>
            <body>
<section id="banner" class="banner" style="margin-bottom: 100px">
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
                    style="width: 160px; margin-top: -26px; margin-left: 20px "></a>
                     <a class="navbar-brand img" href="index.php#">Drinks Shop</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                                  
                    <li> <form method="get" action="/WebShop/index.php">
                    <button type="submit" class="btn btn-default btn-sm"  style="width: 200px; height: 35px; margin-top: 9px;  margin-right:500px;"><span class="glyphicon glyphicon-circle-arrow-left">
                    </span> Continue Shopping</button></form>
                    </li>
                   <!--  <li> <form method="get" action="/WAD/admin/view.php">
                    <button type="submit"  style="width: 90px; height: 35px; margin-top: 7px;  margin-right:7px;">Admin</button></form>
                    </li> -->
                  </ul>
                </div>
              </div>
            </nav>
            <!--end of navbar-->
            </section>
<div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b id="cart">

        <?php
        
        echo $_SESSION['quantity'];

        ?>
          
        </b></span></h4>
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

        </table>
      <hr>
      <p>Total <span class="price" style="color:black"><b id="total">
        
        <?php echo $_SESSION['product_price']; ?>

      </b></span></p>
    </div>
  </div>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="address.php" method="POST">
      
        <div class="row">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Pestalozzistr. 41, Reutlingen, Germany" required="required">
            

          <div class="col-50">
            <!-- <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div> -->
          </div>
          
        </div>
        <input type="submit" value="Order and Pay" class="btn">
      </form>
      <div id="delivery">

        <input type="radio" name="delivery" id="normal" onclick="normal()" checked><p id="normalText">Normal delivery</p>
        <input type="radio" name="delivery" id="express" onclick="express()"><p id="expressText">Express delivery</p>

        <p id="demo"></p>

        <script type="text/javascript">
          function getAllUrlParams(url) {

  // get query string from url (optional) or window
  var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

  // we'll store the parameters here
  var obj = {};

  // if query string exists
  if (queryString) {

    // stuff after # is not part of query string, so get rid of it
    queryString = queryString.split('#')[0];

    // split our query string into its component parts
    var arr = queryString.split('&');

    for (var i = 0; i < arr.length; i++) {
      // separate the keys and the values
      var a = arr[i].split('=');

      // set parameter name and value (use 'true' if empty)
      var paramName = a[0];
      var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];

      // (optional) keep case consistent
      paramName = paramName.toLowerCase();
      if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();

      // if the paramName ends with square brackets, e.g. colors[] or colors[2]
      if (paramName.match(/\[(\d+)?\]$/)) {

        // create key if it doesn't exist
        var key = paramName.replace(/\[(\d+)?\]/, '');
        if (!obj[key]) obj[key] = [];

        // if it's an indexed array e.g. colors[2]
        if (paramName.match(/\[\d+\]$/)) {
          // get the index value and add the entry at the appropriate position
          var index = /\[(\d+)\]/.exec(paramName)[1];
          obj[key][index] = paramValue;
        } else {
          // otherwise add the value to the end of the array
          obj[key].push(paramValue);
        }
      } else {
        // we're dealing with a string
        if (!obj[paramName]) {
          // if it doesn't exist, create property
          obj[paramName] = paramValue;
        } else if (obj[paramName] && typeof obj[paramName] === 'string'){
          // if property does exist and it's a string, convert it to an array
          obj[paramName] = [obj[paramName]];
          obj[paramName].push(paramValue);
        } else {
          // otherwise add the property
          obj[paramName].push(paramValue);
        }
      }
    }
  }

  return obj;
}

            var url = window.location.href;
            var apurl = getAllUrlParams(url);
            var e = getAllUrlParams().express;
            var d;
            d = getAllUrlParams().delivery;
            if (e == "0" && d == "1") {
              document.getElementById("delivery").removeChild(document.getElementById("normal"));
              document.getElementById("delivery").removeChild(document.getElementById("normalText"));
              document.getElementById("delivery").removeChild(document.getElementById("express"));
              document.getElementById("delivery").removeChild(document.getElementById("expressText"));
              document.getElementById("demo").innerHTML = "You selected normal delivery";
            } else if (e == "1" && d == "1") {
              document.getElementById("delivery").removeChild(document.getElementById("normal"));
              document.getElementById("delivery").removeChild(document.getElementById("normalText"));
              document.getElementById("delivery").removeChild(document.getElementById("express"));
              document.getElementById("delivery").removeChild(document.getElementById("expressText"));
              document.getElementById("demo").innerHTML = "You selected express delivery";
            }
        </script>

        <script type="text/javascript">
        function normal() {
          var txt;
          if (confirm("Would you like to oreder a normal delivery?")) {
            document.getElementById("delivery").removeChild(document.getElementById("normal"));
            document.getElementById("delivery").removeChild(document.getElementById("normalText"));
            document.getElementById("delivery").removeChild(document.getElementById("express"));
            document.getElementById("delivery").removeChild(document.getElementById("expressText"));
            window.location.href = "http://localhost/WebShop/delivery.php?express=0";
            txt = "You selected normal delivery";
          } else {
            txt = "";
          }
          document.getElementById("demo").innerHTML = txt;
        }

        function express() {
          var txt;
          if (confirm("Would you like to order a express delivery?")) {
            document.getElementById("delivery").removeChild(document.getElementById("normal"));
            document.getElementById("delivery").removeChild(document.getElementById("normalText"));
            document.getElementById("delivery").removeChild(document.getElementById("express"));
            document.getElementById("delivery").removeChild(document.getElementById("expressText"));
            window.location.href = "http://localhost/WebShop/delivery.php?express=1";
            txt = "You selected express delivery";
          } else {
            txt = "";
          }
          document.getElementById("demo").innerHTML = txt;
        }
        </script>
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




