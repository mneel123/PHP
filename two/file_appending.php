<?php
// echo "Wlecome to write file in php";
// $fptr = fopen("myfile2.txt","w");
// //use for  "w" is open file and file is not exist and attempt to crate file .
// fwrite($fptr,"this is the best file in php.you can read this file for sure.\n");
// fwrite($fptr,"this is another file folder.\n");
// fwrite($fptr,"this is another file folder1.\n");
// fwrite($fptr,"this is another file folder2.");

// fclose($fptr);

// use for "a" is appending to file , only writing 

$fptr = fopen("myfile2.txt","a");
fwrite($fptr, "this is start to appended to the file. \n");
fclose($fptr);

?>