<?php

  try{
    $connection = new PDO("mysql:host=localhost;dbname=pagination_db;charset=utf8mb4","root","");
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "success";
  }catch(PDOException $err){
    die("err: " . $err->getMessage());
  }

?>