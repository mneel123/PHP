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

$sql = "CREATE TABLE `phptrip` (`tno` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `des` VARCHAR(50) NOT NULL , `km` INT(10) NOT NULL , PRIMARY KEY (`tno`))";
$result = mysqli_query($conn , $sql);

if($result){
    echo "the table was created successfully <br>";
}
else {
    echo "the table was not created successfully because this error ---> ".mysqli_error($conn);
}

?>