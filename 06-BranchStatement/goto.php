<?php 
 $x = rand(0,1);
 if($x==0){
  goto a;
 }else{
  echo " hi from out of a:";
  exit;
 }

 a:
  echo "hi from a:";
?>