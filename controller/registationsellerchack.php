<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['username'] = $_REQUEST['username'];

    $data = $_REQUEST['id'] . "|" . $_REQUEST['username'] . "|" . $_REQUEST['password'] . "|" . $_REQUEST['email'] . "|" .$_REQUEST['shopname']. "|" .$_REQUEST['shoptype']. "|" . $_REQUEST['Tradelicencenumber'] .PHP_EOL;
    $fp = fopen('../view/sellerlogindata.txt', 'a');
    fwrite($fp, $data);
    header("Location:../view/sellerlogin.html");
}