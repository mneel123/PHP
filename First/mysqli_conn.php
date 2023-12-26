<?php
echo "<h1>connect to database</h1>";
echo "<br>";

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername , $username ,$password);

if(!$conn) {
    die("sorry failed connection");
}
else {
    echo "Connection Successfull..";
}

?>