<?php 

  session_start();
  $_SESSION = [
    "user"=> "Anuj Ghimire",
    "age"=> 200,
  ];
  // print_r ($_SESSION["age"]);
  if (isset($_SESSION["user"])) echo "Logged in user: " . $_SESSION["user"];

?>