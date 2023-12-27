<?php
// session start and destory data ...
session_start();
session_unset();
session_destroy();
echo "You have been logged out";
?>