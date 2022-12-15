<?php

    $host = "localhost";
    $dbname = "gt-car-enthusiasts";
    $dbuser = "root";
    $dbpass = "";

    function getConnection(){

      global $host;
      global $dbname;
      global $dbpass;
      global $dbuser;
      $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
  
        if($conn){
          return $conn;
        }
        else{
          echo "failed";
        }
    }

    // getConnection();
?>
