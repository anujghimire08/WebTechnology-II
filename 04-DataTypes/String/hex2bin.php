<?php 
 
  $string = "Anuj";
  $res = bin2hex($string);
  $stringBinary = hex2bin($res);
  echo $stringBinary;
