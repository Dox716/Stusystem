<?php
header('Content-type:text/html;charset-utf-8');
session_start();
unset($_SESSION['userid']);
unset($_SESSION['username']);
echo 'User logout successful,Click here to <a href="login.html">log in</a>';
exit;
?>