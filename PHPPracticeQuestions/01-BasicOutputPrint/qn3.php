<?php

// Print vs Echo -> Write a PHP script that demonstrates both echo and print by displaying your name and student ID. 

  $username = "xyz";
  $id = 03;
  $x= print($username . $id);
  //  echo $x; [ Output a string print( string $arg ): int ]

  echo($username . $id);
  // Output one or more strings echo( string $arg1 [, string $... ]): void