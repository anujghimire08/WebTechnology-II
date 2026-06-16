<?php

  $password = "jsdbsaa3435df";

  $options = ["cost"=> 12];

  $hashed_password = password_hash($password,PASSWORD_BCRYPT,$options);
  echo $hashed_password;

  $userinput = "jsdbsaa3435df";
  if(password_verify($userinput,$hashed_password)){
    echo "<br>valid credentials";
  }else{
    echo "<br>Invalid credentials";
  }