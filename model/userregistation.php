<?php 
    require_once('../model/database.php');

    function insertUser($users) 
    {
        $connection = getConnection();
        $sqlQuery = "insert into users(ID,username,password,email,gender,date_of_birth) 
        VALUES ('{$users['ID']}','{$users['username']}','{$users['password']}','{$users['email']}','{$users['gender']}','{$users['dob']}')";

        $status = mysqli_query($connection, $sqlQuery);
        mysqli_close($connection);
        return $status;
    }
    
