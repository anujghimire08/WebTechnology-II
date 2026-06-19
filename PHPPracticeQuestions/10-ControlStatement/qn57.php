<?php

  /*while Loop -> Use a while loop to print even numbers from 2 to 20.*/

  $i = 2;
  echo "even numbers from 2 to 20<br>";
  while($i <=20){
        if($i%2===0) echo $i . " ";
        $i++;
  }