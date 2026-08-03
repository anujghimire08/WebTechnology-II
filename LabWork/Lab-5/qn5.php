<?php

function divide($a, $b): int
{
  return $a / $b;
}

 try{
  divide(2, 0);
 }
 catch(Error){
  echo "can't / by 0";
 }
