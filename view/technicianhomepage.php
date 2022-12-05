<?php
session_start();
if (isset($_COOKIE['status'])) {
    ?>
<!DOCTYPE view>
<view>

<head>

    <title>Technician's home page</title>

</head>

<body>

    <table border="1" align="center" width="100%">
        <tr>
            
            
            <td colspan="3" align="center"><h1>GT CAR ENTHUSIASTS</h1></td>

        </tr>
        <tr>
            <td>
                <img src="../pistures/service.png"alt="Nature" width="100" height="100"> 
            </td>
            <td colspan="3" align="center"><h1>Technicians home page</h1></td>
            
        </tr>
        
        <tr>
            <td rowspan="3">
                <h1>Menu</h1>
                <ul>
                  <li><a href="">Profile.</a></li>
                  <li><a href="">Settings.</a></li>
                  <li><a href="">History.</a></li>
                  <li><a href="">Coustomer list.</a></li>
                  
                </ul>  
            </td>
            <td align="center"><a href="../view/addservice.php"><h1>Add new Service</h1></a></td>
            <td align="center"><a href=""><h1>Edit Services</h1></a></td>
            
        </tr>
        <tr>
            <td align="center"><a href="../view/deleteservices.php"><h1>Delete Services</h1></a></td>
            <td align="center"><a href="../view/servicelist.php"><h1>Services list</h1></a></td>
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

</view>
<?php
} else {
    echo "invalid request";
    echo "<br>";
    echo "please login first";
}
?>