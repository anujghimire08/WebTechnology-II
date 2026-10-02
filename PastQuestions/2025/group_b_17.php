<?php

# Write a program to throw an exception if the user give the even integer.

$user_input = 2;
try {
  if ($user_input % 2 === 0) {
    throw new Exception("DONT GIVE EVEN INTEGER");
  }
  echo $user_input;
} catch (Exception $err) {
  echo $err->getMessage();
}
