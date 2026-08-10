<?php

function divide($a, $b): int
{
  if ($b == 0) {
      throw new Exception("can't / by 0");
  }
  return $a / $b;
}

 try{
  divide(2, 0);
 }
 catch(Exception $e){
  echo $e;
 }
