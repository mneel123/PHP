<?php
// session start and get session data ...
session_start();
if(isset($_SESSION['username'])){
    echo "wlecome ".$_SESSION['username'];
    echo "<br> your like to ready new " . $_SESSION['favcat'];
    echo "<br>";
}
else {
    echo "please login to continue";
}

?>