<?php
session_start();

$adminname = $_POST['adminname'];
$adminpassword = $_POST['adminpassword'];

if (isset($_REQUEST['submit'])) {
    if ($adminname == null || $adminpassword == null) {
        echo "null adminname/adminpassword";
    } else {
        $file = fopen('adminlogindata.txt','r');

        while (!feof($file)) {
            $data = fgets($file);
            $user = explode('|', $data);
            if ($adminname == trim($user[1]) && $adminpassword == trim($user[2])) {
                $_SESSION['status'] = true;
                setcookie('status', 'true', time() + 3600, '/');
                header('location: adminhomepage.php');
            }
        }
        echo "invalid user";
    }
}
?>
