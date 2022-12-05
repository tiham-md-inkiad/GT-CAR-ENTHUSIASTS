<?php
session_start();
if (isset($_COOKIE['status'])) {
?>
<!DOCTYPE html>

<html>

<head>

    <title>Make a new complain </title>

</head>

<body>

    <table border="1" align="center" width="100%">
        <tr>
            
            
            <td colspan="3" align="center"><h1>GT CAR ENTHUSIASTS</h1></td>

        </tr>
        <tr>
            <td>
                <img src="../pictures/maintenance.png"alt="Nature" width="100" height="100"> 
            </td>
            <td colspan="3" align="center"><h1>Adding new items</h1></td>
            
        </tr>
        
        <tr>
            <td rowspan="3">
                <h1>menu</h1>
                <ul>
                <li><a href="../view/userhomepage.php">Home</a></li>
                  <li><a href="">Profile.</a></li>
                  <li><a href="">Settings.</a></li>
                  <li><a href="">History.</a></li>
                  <li><a href="">Order list.</a></li>
                  
                  
                </ul>  
            </td>
            <td calspan="4">
            <form method="post" action="../controller/addcomplainchack.php">
            <fieldset>
                <legend>complain box</legend>
                <table>
                    <tr>
                        <td>complain id</td>
                        <td><input type="text" name="id" value=""></td>
                    </tr>
                    <tr>
                        <td>User name</td>
                        <td><input type="text" name="user_name" value=""></td>
                    </tr>
                   
                    <tr>
                    <td>Select complain type</td>
                        <td>
                            <select name="complain_type">
                            <option value="aboutseller">About seller</option>
                            <option value="abouttechnician">About technician</option>
                            <option value="aboutbloger">About bloger</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Complain</td>
                        <td><input type="text" name="complain" value=""></td>
                    </tr>

                    <tr>

                        <td>

                            <input type="submit" name="submit" value="Submit">
                            <input type="reset" name="" value="Reset">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
            </a></td>
            
            
        </tr>
      
       
        <tr align="center">
        
            <td colspan="3">
            <h4><a href="..\controller\logout.php"> logout</a></h4>
            </td>

        </tr>
        
        <tr align="center">
        
            <td colspan="3">
                <h4>copyright@gtcarenthusiasist</h4>
            </td>

        </tr>



    </table>

</body>


<?php
} else {
    echo "invalid request";
    echo "<br>";
    echo "please login first";
}
?>
