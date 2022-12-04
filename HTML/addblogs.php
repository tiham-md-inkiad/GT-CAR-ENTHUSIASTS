<?php
session_start();
if (isset($_COOKIE['status'])) {
?>
    <!DOCTYPE html>

    <html>

    <head>

        <title>Add a new Blogs </title>

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
                    <img src="../Image/blogging.png" alt="Nature" width="100" height="100">
                </td>
                <td colspan="3" align="center">
                    <h1>Blogs about automibles</h1>
                </td>

            </tr>

            <tr>
                <td rowspan="3">
                    <h1>menu</h1>
                    <ul>
                        <li><a href="../HTML/blogerhomepage.php">Home</a></li>
                        <li><a href="">Profile.</a></li>
                        <li><a href="">Settings.</a></li>
                        <li><a href="">History.</a></li>
                        <li><a href="">Order list.</a></li>


                    </ul>
                </td>
                <td calspan="4">
                    <form method="post" action="blogaddchack.php">
                        <fieldset>
                            <legend>Create a new blog</legend>
                            <table>
                                <tr>
                                    <td>Bloger id</td>
                                    <td><input type="text" name="id" value=""></td>
                                </tr>
                                <tr>
                                    <td>Bloger name</td>
                                    <td><input type="text" name="bloger_name" value=""></td>
                                </tr>
                                <tr>
                                    <td>Blogs</td>
                                    <td><input type="text" name="blogs" value=""></td>
                                </tr>

                                <tr>
                                    <td>Posting date</td>
                                    <td><input type="date" name="post_date" value=""></td>
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
                    </a>
                </td>


            </tr>


            <tr align="center">

                <td colspan="3">
                    <h4><a href="..\HTML\logout.php"> logout</a></h4>
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