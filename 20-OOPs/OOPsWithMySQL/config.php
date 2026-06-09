<?php

  $host= "localhost";
  $username= "root";
  $password= null;
  $dbname = "employee";
  try{
    $connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    // var_dump($connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION));
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // var_dump($connection);
    echo "<h1 style='color:green'>Connected with MySQL</h1>";
  }catch(PDOException $err){
    die("error: " . $err->getMessage());
  }

?>