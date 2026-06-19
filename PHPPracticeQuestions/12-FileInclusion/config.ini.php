<?php

  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "employee";

  try{
 
  $connection = new PDO("mysql:host=$host;dbname=$database",$username,$password);
  // var_dump($connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION));
  $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "connection success";
  }catch(PDOException $err){
    die("connection failed:" . $err->getMessage());
  }

?>