<?php 
    require_once('../model/database.php');

    function insertblogers($blogers) 
    {
        $connection = getConnection();
        $sqlQuery = "insert into blogers(id,username,password,email,date_of_birth,blogertype,gender) 
        VALUES ('{$blogers['id']}','{$blogers['username']}','{$blogers['password']}','{$blogers['email']}','{$blogers['date_of_birth']}','{$blogers['blogertype']}','{$blogers['gender']}')";

        $status = mysqli_query($connection, $sqlQuery);
        mysqli_close($connection);
        return $status;
    }
    
