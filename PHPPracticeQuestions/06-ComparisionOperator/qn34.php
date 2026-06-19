<?php

  /*. Comparison Chain -> Compare three numbers (a=45, b=60, c=45) using various
comparison operators and display boolean results. */

$a = 45;$b = 60;$c = 45;

echo "a == b: ";
var_dump($a == $b);

echo "<br>a == c: ";
var_dump($a == $c);

echo "<br>a != b: ";
var_dump($a != $b);

echo "<br>a < b: ";
var_dump($a < $b);

echo "<br>b > c: ";
var_dump($b > $c);

echo "<br>a >= c: ";
var_dump($a >= $c);

echo "<br>a <= b: ";
var_dump($a <= $b);

echo "<br>a === c: ";
var_dump($a === $c);
?>