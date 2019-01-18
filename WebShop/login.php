          <?php 
// #includes
require('includes/conn.inc.php');
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
            <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                  </button>
                  <a class="navbar-brand img" href="#"><img src="img/logodrinks.png" class="img-responsive"
                    style="width: 160px; margin-top: -26px; margin-left: 20px"></a>
                     <a class="navbar-brand img" href="#">Drinks Shop</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  
                </div>
              </div>
            </nav>
            <!--end of navbar-->
            </section>

      <div id="" class="container text-center"  style="margin-top: 50px">
      <div id="page">
            <div id="content">
        <h2>LOGIN</h2>

             <form action="checkLogin.php" method="post" >

                  <label for="email">email</label>
                  <input name="email" type="text">

                  <label for="password">Password</label>
                  <input name="password" type="password">

                  <input type="Submit" value="submit">

                    <br>
                  <a href="register.php" title="Register"></br>Register</a>
             </form>
    
            </div>
        </div>

      
     
    </div>
      </div>

    <!-- poll -->
      <!-- <div id="poll" class="container text-center">
      <h3>Quick poll: Do you prefer to meet on Thursdays or Fridays?</h3>
      <form>
      Thursdays:
      <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
      <br>Fridays:
      <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
      </form>
      </div> -->
    <!-- end ofpoll -->
     
      
    </body>

      <footer class="text-center" style="border-top: 3px solid #ccc;">
              <p>Created by: Gustavo Sanchez, Arjun Grewal and Francisco J. Garcia</p>
             <p>Contact information: <a href="mailto:gsanchezcollado@gmail.com">
              gsanchezcollado@gmail.com</a></p>
      </footer>
      </html>




