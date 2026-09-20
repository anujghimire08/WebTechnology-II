<?php 

 function printText(&$msg){
   $msg= "wassup";
 }


 $msg = "hi";
  printText($msg);
  // echo $msg;



  $valueChanger = fn(&$value) => $value++;
  $num = 10;
  echo $num;
  $valueChanger($num);
  echo $num;






?>