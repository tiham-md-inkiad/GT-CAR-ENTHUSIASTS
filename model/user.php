<?php
	require_once('database.php');
function InsertUser( $id,$username,$email,$password,$gender,$date_of_birth)
{
    $con = getConnection();

        $sql="INSERT INTO users( id, username, email, password, gender, date_of_birth ) VALUES('$id','$username','$email','$password','$gender','$date_of_birth')";
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