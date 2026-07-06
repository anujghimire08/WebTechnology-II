<?php

$val = "sdjsdk";
$val1 = 2;
$val2 = 3;

echo is_numeric($val) ? "Numeric<br>" : "Not Numeric<br>";

echo "Use of + : " . ($val1 + $val2) . "<br>";
echo "Use of - : " . ($val1 - $val2) . "<br>";
echo "Use of * : " . ($val1 * $val2) . "<br>";
echo "Use of / : " . round($val1 / $val2) . "<br>";
echo "Use of % : " . ($val1 % $val2) . "<br>";

$val1 += $val2;
echo "Use of += : " . $val1 . "<br>";

$val1 -= $val2;
echo "Use of -= : " . $val1 . "<br>";

if($val1 % 2 == 0 && $val2 % 2 == 0)
    echo "Both numbers are even.<br>";

if($val1 % 2 != 0 && $val2 % 2 != 0)
    echo "Both numbers are odd.<br>";

if($val1 % 2 == 0 || $val2 % 2 == 0)
    echo "At least one number is even.<br>";

echo "Before Increment: $val1<br>";
$val1++;
echo "After Post Increment (val1++): $val1<br>";

echo "Before Decrement: $val1<br>";
--$val1;
echo "After Pre Decrement (--val1): $val1<br>";

?>