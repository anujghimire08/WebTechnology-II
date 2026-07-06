<?php

  echo "<h1>String Function</h1>";
  $string  = "AnujGhimire";
  echo "strlen use: ";
  echo strlen($string);
  echo "<hr>";
  echo "strrev use: ";
  echo strrev($string);
  echo "<hr>";
  echo "strpos use: ";
  echo strpos($string,"uj");
  echo "<hr>";
  echo "strtolower use: ";
  echo strtolower($string);
  echo "<hr>";
  echo "strtoupper use: ";
  echo strtoupper($string);
  echo "<hr>";
  echo "substr use: ";
  echo substr($string,2,4);
  echo "<hr>";
  echo "str_replace use: ";
  echo str_replace("Ghimire","Kshetry",$string);
  echo "<hr>";
