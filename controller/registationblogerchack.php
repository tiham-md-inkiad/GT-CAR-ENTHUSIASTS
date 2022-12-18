<?php
    require_once('../model/blogerregistation.php');
    $ID = $_POST['ID'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $dob = $_POST['date_of_birth'];
    $blogertype = $_POST['blogertype'];
    $gender = $_POST['gender'];

    if($ID == null || $ID == "") {
        echo "ID  is required";
    }
    else if($username == null || $username == "") {
        echo "Username is required";
    } else if($email == null || $email == "") {
        echo "Email is required";
    } else if($password == null || $password == "") {
        echo "Password is required";
    } else if($date_of_birth == null || $date_of_birth== "") {
        echo "DOB is required";
    } 
        else if($blogertype == null || $blogertype == "") {
        echo "blogertype is required";
    } 
         else if($gender == null || $gender == "") {
        echo "Gender is required";
    }  
    else if(strlen($password) < 4){
        echo "Password must not be less than four (4) characters";
    }
    else {
        $blogers= ['ID'=>$ID,'username'=>$username, 'password'=>$password,'email'=>$email, 'date_of_birth'=>$date_of_birth,'blogertype'=>$blogertype,'gender'=>$gender];
        $status = insertblogers($blogers);

        if($status)
        {
            echo $status;
           
            header("Location: ../view/blogeslogin.html");
        }
        else 
        {
             echo "Failed to save user in database";
        }
    }
?>
