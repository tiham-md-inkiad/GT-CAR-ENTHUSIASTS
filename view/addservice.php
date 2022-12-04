<?php
session_start();
if (isset($_COOKIE['status'])) {
?>
<!DOCTYPE html>

<html>

<head>

    <title>Add a new services </title>

</head>

<body>

    <table border="1" align="center" width="100%">
        <tr>
            
            
            <td colspan="3" align="center"><h1>GT CAR ENTHUSIASTS</h1></td>

        </tr>
        <tr>
            <td>
                <img src="../picture/maintenance.png"alt="Nature" width="100" height="100"> 
            </td>
            <td colspan="3" align="center"><h1>Adding new services </h1></td>
            
        </tr>
        
        <tr>
            <td rowspan="3">
                <h1>menu</h1>
                <ul>
                <li><a href="../view/technicianhomepage.php">Home</a></li>
                  <li><a href="">Profile.</a></li>
                  <li><a href="">Settings.</a></li>
                  <li><a href="">History.</a></li>
                  <li><a href="">Order list.</a></li>
                  
                  
                </ul>  
            </td>
            <td calspan="4">
            <form method="post" action="../controller/addservicechack.php">
            <fieldset>
                <legend>Add Services</legend>
                <table>
                    <tr>
                        <td>Service id</td>
                        <td><input type="text" name="id" value=""></td>
                    </tr>
                    <tr>
                        <td>Service  name</td>
                        <td><input type="text" name="service_name" value=""></td>
                    </tr>
                   
                    <tr>
                    <td>Service Type</td>
                        <td>
                            <select name="service_type">
                            <option value="decoration">Decoration</option>
                            <option value="bodyparts">Bodyparts</option>
                            <option value="engineparts">Engineparts</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Service  price</td>
                        <td><input type="text" name="service_price" value=""></td>
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
