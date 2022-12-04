<?php
session_start();
if (isset($_REQUEST['update'])) {


    $lookfor = $_SESSION['bloger_name'];

    $newtext = $_REQUEST['bloger_name'];


    $str = file_get_contents('blogpsots.txt');

    $str = str_replace($lookfor, $newtext, $str);

    file_put_contents('blogpsots.txt', $str);
    header("Location:editblogs.php");
}
