<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($servername , $username ,$password , $database);

if(!$conn) {
    die("sorry failed connection");
}
// else {
//     echo "connetion successfully";
// }


?>