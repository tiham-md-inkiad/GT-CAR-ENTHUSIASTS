<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['service_name'] = $_REQUEST['service_name'];

    $data = $_REQUEST['id'] . "|" . $_REQUEST['service_name'] . "|" . $_REQUEST['service_type'] . "|" . $_REQUEST['service_price'] . PHP_EOL;
    $fp = fopen('Servicedata.txt', 'a');
    fwrite($fp, $data);
    header("Location:addservice.php");
}