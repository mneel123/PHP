<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbyash";

$conn = mysqli_connect($servername , $username ,$password , $database);

if(!$conn) {
    die("sorry failed connection");
}
else {
    echo "Connection Successfull..<br>";
}


$sql = "DELETE FROM `employees` WHERE `name` = 'manu' LIMIT 2";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo "<br>number of rows affected is : $aff <br>"

?>