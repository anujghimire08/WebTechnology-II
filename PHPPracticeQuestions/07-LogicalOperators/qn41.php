<?php
  /*Login System -> Create a simple login check: username is "admin" AND password is "1234".Display "Welcome Admin" if true, otherwise "Invalid Credentials".*/

  $userInputname = "xyz";
  $userInputpassword = "dsd233";
  echo ($userInputname==="admin" && $userInputpassword ==="1234")? "Welcome Admin" : "Invalid Credentials";