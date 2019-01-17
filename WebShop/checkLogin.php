<?php
require('includes/conn.inc.php');

    session_start();

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
            
            $_SESSION['login'] = 1;
            header("Location: ../WebShop/index.php");
           
        }
        else{

            echo "not valid";

            // header("Location: ../webshop/login.php");
        }
    }
?>