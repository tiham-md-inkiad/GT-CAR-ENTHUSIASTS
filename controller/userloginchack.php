<?php
session_start();
require_once('../model/database.php');
require_once('../model/userlogin.php');

$email = $_POST['email'];
$password = $_POST['password'];
// print_r($email);

if($email == null || $password == null){
    echo "null username/password";
}else{

    $status = loginCheck($email, $password);

    if($status){
        $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;
        // setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/userhomepage.php');
    }else{
        echo "invalid user";
    }
    
}
?>