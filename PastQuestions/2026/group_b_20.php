<?php

/*
 20. Write a PHP function to store only the even integers from an array in a file named "even.txt".
 */


function storeEvenNumbers($numbers)
{
  $file = fopen("even.txt", "w");

  foreach ($numbers as $number) {
    if ($number % 2 == 0) {
      fwrite($file, $number . "\n");
    }
  }

  fclose($file);
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8];

storeEvenNumbers($numbers);
