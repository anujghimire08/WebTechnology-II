<?php

# Write a PHP function that accepts array named 'age' as an argument and returns the avg age;
  
$age = [1,2,3,4,5];
function avgAge($ages) : int {
  $totalAge = 0;
  foreach($ages as $age) {
    $totalAge += $age;
  }
  return $totalAge / count($ages) ;
}

echo avgAge($age);