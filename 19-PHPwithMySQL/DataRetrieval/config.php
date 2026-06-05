<?php 

 $host = "localhost";
 $username="root";
 $pass = null;
 $db = "employee";

 try{
  $connection = new PDO("mysql:host=$host;dbname=$db",$username,$pass);
  //  print_r($connection);
  $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "connection success";
 }catch(PDOException $err){ 
  die("err:" . $err->getMessage());
 }
 
?>