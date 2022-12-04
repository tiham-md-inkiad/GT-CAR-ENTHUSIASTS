<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['bloger_name'] = $_REQUEST['bloger_name'];

    $data = $_REQUEST['id'] . "|" . $_REQUEST['bloger_name'] . "|" . $_REQUEST['blogs'] . "|" . $_REQUEST['post_date'] . PHP_EOL;
    $fp = fopen('blogpsots.txt', 'a');
    fwrite($fp, $data);
    header("Location:addblogs.php");
}
