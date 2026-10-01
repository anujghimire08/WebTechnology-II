<?php

$a = 10;
$b = 5;

// Arithmetic operators
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

echo "<br>";

// Comparison operators
echo "Equal: " . var_dump($a == $b) . "<br>";
echo "Not Equal: " . var_dump($a != $b) . "<br>";
echo "Greater: " . var_dump($a > $b) . "<br>";

echo "<br>";

// Logical operators
$x = true;
$y = false;

echo "AND: " . var_dump($x && $y) . "<br>";
echo "OR: " . var_dump($x || $y) . "<br>";

?>