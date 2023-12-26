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


$sql = "SELECT * FROM `employees` WHERE `email` = 'yash@123'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
echo $num;
echo "<br>";
$no=1;
if($num > 0){

    while($row = mysqli_fetch_assoc($result)){
        echo $no . ". Hello " . $row['name'] . " And Your Email Id Is " . $row['email'];
        echo "<br>";
        $no = $no +1;
    }
}

$sql = "UPDATE `employees` SET `password` = 'yash2' WHERE `eid` = 10";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Update successfully.";
} else {
    echo "could not Update successfully.";
}

?>