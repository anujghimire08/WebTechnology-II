<?php

  $a = $b = 700;
  $c = "200";
  $a = (string) $a;
  echo var_dump($a) . "<br>";
  $b = (boolean) $b;
  echo $b . "<br>";
  $c = (int) $c;
  echo $c . "<br>";
  $e = 20;
  $e = (array) $e;
  print_r ( $e ) ;
  echo "<br>";
  $f = 200;
  $f = (object) $f;
  var_dump( $f);
  ?>