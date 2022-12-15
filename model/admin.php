<?php
	require_once('database.php');


function loginCheck($email, $password){
    $conn = getConnection();
    $sql = "select * from admins where email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count >0){
        return true;
    }else{
        return false;
    }
}