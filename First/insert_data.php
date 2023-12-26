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
// create variable 
$name = "nell";
$mno = "87686457";
$city = "bopal";
$sql = "INSERT INTO `user` (`uname`, `mno`, `city`) VALUES ('$name', '$mno', '$city')";
$result = mysqli_query($conn , $sql);

if($result){
    echo "the data insert successfully <br>";
}
else {
    echo "the data not  insert  successfully because this error ---> ".mysqli_error($conn);
}

?>