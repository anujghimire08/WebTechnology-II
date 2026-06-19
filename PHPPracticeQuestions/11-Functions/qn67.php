<?php

  
/*Type Hinting -> Write a function with strict typing that adds two integers and returns the result. Test with integer and string inputs. */


function add(int $a, int $b) : int {
    return $a + $b;
}

echo add(2,3);
// echo add('sdh','ds34');
/* Fatal error: Uncaught TypeError: add(): Argument #1 ($a) must be of type int, string given, called in C:\xampp\htdocs\WebTechnology-II\PHPPracticeQuestions\11-Functions\qn67.php on line 12 and defined in C:\xampp\htdocs\WebTechnology-II\PHPPracticeQuestions\11-Functions\qn67.php:7 Stack trace: #0 C:\xampp\htdocs\WebTechnology-II\PHPPracticeQuestions\11-Functions\qn67.php(12): add('sdh', 'ds34') #1 {main} thrown in C:\xampp\htdocs\WebTechnology-II\PHPPracticeQuestions\11-Functions\qn67.php on line 7*/



