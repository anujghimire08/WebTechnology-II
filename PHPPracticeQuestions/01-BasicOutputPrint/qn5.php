<?php

/*Using Print in Expression -> Write a PHP script that uses the print construct inside an expression and displays the return value (which is 1) */ 

  $username = "xyz";
  $id = 03;
  $x= print($username . $id);
  echo  "<br>" . $x;
  //  echo $x; [ Output a string print( string $arg ): int ]