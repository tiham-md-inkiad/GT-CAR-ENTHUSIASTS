<?php

session_start();
session_destroy();
setcookie('status', 'true', time() - 100, '/');
header('location: ../view/welcomepage.html');
?>