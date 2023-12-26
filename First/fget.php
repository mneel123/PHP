<?php

 $fptr = fopen("myfile.txt","r");
// // echo fgets($fptr);
// // echo fgets($fptr);
// while($a = fgets($fptr)){
//     echo $a;
// }
// echo "end of the file";
// --------charater-------------
// while($a = fgetc($fptr)){
//         echo $a;
//         break;
//      }
//         echo "end of the file";

// ------write a program which read the content------
while($a = fgetc($fptr)){
          echo $a;
          if($a == "b"){
            break;
          }
}
fclose($fptr);
?>