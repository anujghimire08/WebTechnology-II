<?php

/*Scope Demonstration -> Create a function that attempts to access a variable defined outside the function. Show that it's inaccessible.*/

$a = 10;
  
function FunctionName() {
        echo $a;      
}
FunctionName();

/*Warning: Undefined variable $a in C:\xampp\htdocs\WebTechnology-II\PHPPracticeQuestions\11-Functions\qn66.php on line 8*/
