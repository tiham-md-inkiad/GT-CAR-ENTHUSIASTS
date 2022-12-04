<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['product_name'] = $_REQUEST['product_name'];

    $data = $_REQUEST['id'] . "|" . $_REQUEST['product_name'] . "|" . $_REQUEST['product_type'] . "|" . $_REQUEST['price'] . PHP_EOL;
    $fp = fopen('../view/Productdata.txt', 'a');
    fwrite($fp, $data);
    header("Location:../view/additems.php");
}