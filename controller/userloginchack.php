<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_REQUEST['submit'])) {
    if ($username == null || $password == null) {
        echo "null username/password";
    } else {
        $file = fopen('../view/userlogindata.txt','r');

        while (!feof($file)) {
            $data = fgets($file);
            $user = explode('|', $data);
            if ($username == trim($user[1]) && $password == trim($user[2])) {
                $_SESSION['status'] = true;
                setcookie('status', 'true', time() + 3600, '/');
                header('location: ../view/userhomepage.php');
            }
        }
        echo "invalid user";
    }
}
?>
