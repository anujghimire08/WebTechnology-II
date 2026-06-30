<?php 

  echo "<h1>while Output</h1>";

 $i = 0;
  while($i<10){
    echo $i . " ";
    $i++;
  }


  echo "<h1>do-while Output</h1>";
  $x = 10;
  do{
    echo $x . " ";
    $x--;
  }while($x>0);