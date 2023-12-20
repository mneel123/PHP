<?php
// __________Encode___________
// $age = array("yash" => 22, "riya" => 27, "jay" => 29);
// echo json_encode($age);
// ________Decode___________
// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
// var_dump(json_decode($jsonobj));

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value){
    echo $key . " => " . $value. "<br>" ;
}

?>