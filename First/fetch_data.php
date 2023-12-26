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

$sql = "SELECT * FROM `employees`";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
echo $num;
echo "<br>";

if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo $row['eid'] . " Hello " . $row['name'] . " And Your Email Id Is " . $row['email'];
        echo "<br>";
    }
}

?>