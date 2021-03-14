<?php
//echo"注销页面";
session_start();
unset($_SESSION['userid']);
unset($_SESSION['username']);
echo 'User logout successful,Click here to <a href="admin_login.html">log in</a>';
exit;
?>