<?php

/* Combination Operators Check if a student has passed both Math and English
*/

$math = 75;
$english = 65;
$passMark = 40;

echo (($math >= $passMark) && ($english >= $passMark))
    ? "Student Passed"
    : "Student Failed";

?>