<?php

$fptr = fopen("myfile.txt","r");
// echo  var_dump($fptr);
if(!$fptr){
    die("unable to open this file.");
}
echo "<br>";
$content = fread($fptr, filesize("myfile.txt"));
echo $content;
?>