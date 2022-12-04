<?php
session_start();
if (isset($_COOKIE['status'])) {
    ?>

<!DOCTYPE html>
<html>

<head>

    <title>Seller home page</title>

</head>

<body>

    <table border="1" align="center" width="100%">
        <tr>
            
            
            <td colspan="3" align="center"><h1>GT CAR ENTHUSIASTS</h1></td>

        </tr>
        <tr>
            <td>
                <img src="../Image/social-media.png"alt="Nature" width="100" height="100"> 
            </td>
            <td colspan="3" align="center"><h1>Seller home page</h1></td>
            
        </tr>
        
        <tr>
            <td rowspan="3">
                <h1>Menu</h1>
                <ul>
                  <li><a href="">Profile.</a></li>
                  <li><a href="">Settings.</a></li>
                  <li><a href="">History.</a></li>
                  <li><a href="">Track order.</a></li>
                  <li><a href="">Coustomer list.</a></li>
                  
                </ul>  
            </td>
            <td align="center"><a href="../HTML/additems.php"><h1>Add new items</h1></a></td>
            <td align="center"><a href=""><h1>Edit items</h1></a></td>
            
        </tr>
        <tr>
            <td align="center"><a href="../HTML/deleteitems.php"><h1>Delete items</h1></a></td>
            <td align="center"><a href="../HTML/Productlist.php"><h1>Items list</h1></a></td>
        </tr>
       
        <tr align="center">
        
            <td colspan="3">
            <h4><a href="..\HTML\logout.php"> logout</a></h4>
            </td>

        </tr>
        
        <tr align="center">
        
            <td colspan="3">
                <h4>copyright2022@gtcarenthusiasist</h4>
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