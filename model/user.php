<?php
	require_once('database.php');
function InsertUser( $name, $email, $password)
{
    $con = getConnection();

        $sql="INSERT INTO users( username, email,password) VALUES('$name','$email','$password')";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

}


function loginCheck($email, $password){
    $conn = getConnection();
    $sql = "select * from users where email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count >0){
        return true;
    }else{
        return false;
    }
}