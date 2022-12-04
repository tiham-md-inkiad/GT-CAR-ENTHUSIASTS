<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['username'] = $_REQUEST['username'];

    $data = $_REQUEST['id'] . "|" . $_REQUEST['username'] . "|" . $_REQUEST['password'] . "|" . $_REQUEST['email'] . "|" .$_REQUEST['gender']. "|" .$_REQUEST['dob'] ."|" .$_REQUEST['blogertype'].PHP_EOL;
    $fp = fopen('../view/blogerlogindata.txt', 'a');
    fwrite($fp, $data);
    header("Location:../view/blogerlogin.html");
}