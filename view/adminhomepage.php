<?php
session_start();
if (isset($_COOKIE['status'])) {
    ?>
<!DOCTYPE html>

<html>

<head>

    <title>Admin home page</title>

</head>

<body>

    <table border="1" align="center" width="100%">
        <tr>
            
            
            <td colspan="3" align="center"><h1>GT CAR ENTHUSIASTS</h1></td>

        </tr>
        <tr>
            <td>
                <img src="../Image/unauthorized-person.png"alt="Nature" width="100" height="100"> 
            </td>
            <td colspan="3" align="center"><h1>Admin home page</h1></td>
            
        </tr>
        
        <tr>
            <td rowspan="3">
                <h1>menu</h1>
                <ul>
                  <li><a href="">Profile.</a></li>
                  <li><a href="">Settings.</a></li>
                  <li><a href="">History.</a></li>
                  <li><a href="">Order list.</a></li>
                  
                  
                </ul>  
            </td>
            <td align="center"><a href="../view//adminbloglistdelete.php"><h1>Bloger</h1></a></td>
            <td align="center"><a href="../view//adminseller.php"><h1>Sellers</h1></a></td>
            
        </tr>
        <tr>
            <td align="center"><a href="../view//adminserviceslist.php"><h1>technicians</h1></a></td>
            <td align="center"><a href="../view//veiwcomplain.php"><h1>User complain list</h1></a></td>
        </tr>
        
       
        <tr align="center">
        
            <td colspan="3">
            <h4><a href="..\controller\adminlogout.php"> logout</a></h4>
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