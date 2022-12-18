<?php
    require_once('../model/userregistation.php');
    $ID = $_POST['ID'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if($username == null || $username == "") {
        echo "Username is required";
    }
    else if($ID == null || $ID == "") {
        echo "ID is required";
    } else if($email == null || $email == "") {
        echo "Email is required";
    } else if($password == null || $password == "") {
        echo "Password is required";
    } else if($gender == null || $gender == "") {
        echo "Gender is required";
    } else if($dob == null || $dob == "") {
        echo "DOB is required";
    } else if(strlen($password) < 4){
        echo "Password must not be less than four (4) characters";
    } 
    else {
        $users = ['ID'=>$ID,'username'=>$username, 'password'=>$password,'email'=>$email, 'dob'=>$dob,'gender'=>$gender];
        $status = insertUser($users);

        if($status)
        {
            echo $status;
           
            header("Location: ../view/userlogin.html");
        }
        else 
        {
             echo "Failed to save user in database";
        }
    }
?>