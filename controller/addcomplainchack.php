<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['user_name'] = $_REQUEST['user_name'];

    $data = $_REQUEST['id'] . "|" . $_REQUEST['user_name'] . "|" . $_REQUEST['complain_type'] . "|" . $_REQUEST['complain'] . PHP_EOL;
    $fp = fopen('complaindata.txt', 'a');
    fwrite($fp, $data);
    header("Location:customercare.php");
}