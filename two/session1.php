<?php
session_start();
$_SESSION['username'] = "Yash";
$_SESSION['favcat'] = "Books";
echo "your session data is set";
?>