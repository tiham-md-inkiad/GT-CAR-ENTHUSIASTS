<?php
session_start();
if (isset($_COOKIE['status'])) {
    ?>
<!DOCTYPE html>

<html>

<head>

    <title>Complain list </title>

</head>

<body>

    <table border="1" align="center" width="100%">
        <tr>
            
            
            <td colspan="3" align="center"><h1>GT CAR ENTHUSIASTS</h1></td>

        </tr>
        <tr>
            <td>
                <img src="../Image/test.png"alt="Nature" width="100" height="100"> 
            </td>
            <td colspan="3" align="center"><h1>complain lists</h1></td>
            
        </tr>
        
        <tr>
            <td rowspan="3">
                <h1>menu</h1>
                <ul>
                <li><a href="../HTML/adminhomepage.php">Home</a></li>
                  <li><a href="">Profile.</a></li>
                  <li><a href="">Settings.</a></li>
                  <li><a href="">History.</a></li>
                  <li><a href="">Order list.</a></li>
                  
                  
                  
                </ul>  
            </td>
            <td calspan="4">
            <form name="form2"  method="POST">
            <fieldset>
                <legend> Complain list</legend>
                <table>
                    <?php

                    $display = file("complaindata.txt");
                    for ($i = 0; $i <= count($display) - 1; $i++) {

                        $lines = explode("|", $display[$i]);
                        
                        echo (' Complain  id: <input type="text" name="id" value="' . $lines[0] . '">
                        | Username name: <input type="text" name="user_name" value="' . $lines[1] . '">
                        | complain Type: <input type="text" name="complain_type" value="' . $lines[2] . '">
                        | complian: <input type="text" name="complain" value="' . $lines[3] . '">
       
       
                        <br>');
                           }



                    ?>
                </table>
            </fieldset>
        </form>
            </a></td>
            
            
        </tr>
      
       
        <tr align="center">
        
            <td colspan="3">
            <h4><a href="..\HTML\adminlogout.php"> logout</a></h4>
            </td>

        </tr>
        
        <tr align="center">
        
            <td colspan="3">
                <h4>copyright@gtcarenthusiasist</h4>
            </td>

        </tr>



    </table>

</body>

</html>
<?php
} else {
    echo "invalid request";
    echo "<br>";
    echo "please login first";
}
?>