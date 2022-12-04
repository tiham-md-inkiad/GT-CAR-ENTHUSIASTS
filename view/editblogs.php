<?php
session_start();
if (isset($_COOKIE['status'])) {
    ?>
<!DOCTYPE html>

<html>

<head>

    <title>Edit Blogs </title>

</head>

<body>

    <table border="1" align="center" width="100%">
        <tr>
            
            
            <td colspan="3" align="center"><h1>GT CAR ENTHUSIASTS</h1></td>

        </tr>
        <tr>
            <td>
                <img src="../pictures/blogging.png"alt="Nature" width="100" height="100"> 
            </td>
            <td colspan="3" align="center"><h1>Blogs about automibles</h1></td>
            
        </tr>
        
        <tr>
            <td rowspan="3">
                <h1>menu</h1>
                <ul>
                <li><a href="../view/blogerhomepage.php">Home</a></li>
                  <li><a href="">Profile.</a></li>
                  <li><a href="">Settings.</a></li>
                  <li><a href="">History.</a></li>
                  <li><a href="">Order list.</a></li>
                  
                  
                  
                </ul>  
            </td>
            <td calspan="4">
            <form name="form2" action="../controller/editblogchack.php" method="POST">
        <fieldset>
            <legend>Update blogpsots</legend>
            <table>
                <?php

                $display = file("../view/blogpsots.txt");
                for ($i = 0; $i <= count($display) - 1; $i++) {

                    $lines = explode("|", $display[$i]);

                    print('   Bloger id: <input type="txt" name="id" value="' . $lines[0] . '">
                    | Bloger name: <input type="text" name="Bloger name" value="' . $lines[1] . '">
                    | Blogs: <input type="text" name="blogs" value="' . $lines[2] . '">
                    | Posting date: <input type="text" name="post_date" value="' . $lines[3] . '">


                 | <input type="submit" name="update" value="UPDATE"><br>

                 ');

                }



                ?>
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

</html>
<?php
} else {
    echo "invalid request";
    echo "<br>";
    echo "please login first";
}
?>