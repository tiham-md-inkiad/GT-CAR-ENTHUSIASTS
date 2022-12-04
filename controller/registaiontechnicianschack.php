<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['username'] = $_REQUEST['username'];

    $data = $_REQUEST['id'] . "|" . $_REQUEST['username'] . "|" . $_REQUEST['password'] . "|" . $_REQUEST['email'] . "|" .$_REQUEST['shopname']. "|" .$_REQUEST['Servicetype']. "|" . $_REQUEST['Tradelicencenumber'] .PHP_EOL;
    $fp = fopen('../view/technicianlogindata.txt', 'a');
    fwrite($fp, $data);
    header("Location:../view/technicianlogin.html");
}