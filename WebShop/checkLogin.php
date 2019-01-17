<?php
require('includes/conn.inc.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!filter_input(INPUT_POST, 'email')){
        header("login.php");
    }
    else{
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $stmt = $pdo->query($sql);
        $row =$stmt->fetch(pdo::FETCH_ASSOC);
        $dbPasswordHash = password_verify($password, $row['password']);

        if($dbPasswordHash == true){

            echo "valid";

          /*  header("Location: ../webshop/index.php");
            $_SESSION['login'] = 1;*/
        }
        else{

            echo "not valid";

            // header("Location: ../webshop/login.php");
        }
    }
?>