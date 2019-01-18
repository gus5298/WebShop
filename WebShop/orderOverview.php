<?php
require('includes/conn.inc.php');
session_start();
error_reporting(0);
@ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order overview</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>Thank you for buying!</h1><br>
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

  $sql = "INSERT INTO orders (userId, description, totalPrice, date, address, express)
       VALUES ('$ui', '$desc', '$tp', '$date', '$addr', '$exp')";
  $stmt = $pdo -> query($sql);
  ?>

  <input type="button" name="refresh" onclick="refresh()" value="Click here to order again">
  <input type="button" name="logout" onclick="logout()" value="Click here to go back to the main page">

  <script type="text/javascript">
    function refresh() {
      window.location.href = "orderOverview.php";
    }

    function logout() {
      window.location.href = "logout.php";
    }
  </script>

</body>
</html>