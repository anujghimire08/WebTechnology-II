<?php

  $host = "localhost";
  $username = "root";
  $pass= null;
  $database = "employee";

  $connection = new mysqli($host,$username,$pass,$database);
  // echo "<pre>";
  // print_r($connection);
  // echo "</pre>";
  // var_dump($connection->connect_error);
  if($connection->connect_error){
      die("connection failed".$connection->connect_error);
  }else{
    echo "connection success<br>"; 
     print_r($connection->query("SHOW TABLES"));
  }
  
?>