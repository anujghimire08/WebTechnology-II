<?php 

 /* Swap Values -> Swap the values of two variables (a=10,  b=20) without using a third variable. */

 $a=10;  $b=20;
 echo "Before<br>";
 echo "a={$a} and b={$b}";
 
 $a = $a ^ $b;
 $b = $a ^ $b;
 $a = $a ^ $b;


 echo "<br>After<br>";
 echo "a={$a} and b={$b}";

