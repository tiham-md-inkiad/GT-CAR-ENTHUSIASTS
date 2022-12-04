<?php
session_start();
if (isset($_COOKIE['status'])) {
?>
    <!DOCTYPE html>
    <html>

    <head>

        <title>Bloger's home page</title>

    </head>

    <body>

        <table border="1" align="center" width="100%">
            <tr>

                <td colspan="3" align="center">
                    <h1>GT CAR ENTHUSIASTS</h1>
                </td>

            </tr>
            <tr>
                <td>
                    <img src="../pictures/blogger.png" alt="Nature" width="100" height="100">
                </td>

                <td colspan="2" align="center">
                    <h1>Bloger home page</h1>
                </td>

            </tr>
            <tr>
                <td rowspan="3">
                    <h1>Menu</h1>
                    <ul>
                        <li><a href="">Profile.</a></li>
                        <li><a href="">Settings.</a></li>
                        <li><a href="">History.</a></li>


                    </ul>
                </td>
                <td align="center"><a href="../view/addblogs.php">
                        <h1>Add new blogs</h1>
                    </a></td>
                <td align="center"><a href="../view/editblogs.php">
                        <h1>Edit blogs</h1>
                    </a></td>

            </tr>
            <tr>
                <td align="center"><a href="../view/deletblogs.php">
                        <h1>Delete blogs</h1>
                    </a></td>
                <td align="center"><a href="../view/bloglist.php">
                        <h1>blog list</h1>
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