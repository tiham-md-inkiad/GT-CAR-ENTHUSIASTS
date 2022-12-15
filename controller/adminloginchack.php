<?php
session_start();
require_once('../model/database.php');
require_once('../model/admin.php');

$email = $_POST['email'];
$password = $_POST['password'];


if($email == null || $password == null){
    echo "null username/password";
}else{

    $status = loginCheck($email, $password);

    if($status){
        $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;
        
        header('location: ../view/adminhomepage.php');
    }else{
        echo "invalid user";
    }
    
}
?>