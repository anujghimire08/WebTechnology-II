<?php 

$host = "localhost";
$name= "web2";
$user="root";
$pass = "sql123";

try{
  $pdo = new PDO("mysql:host={$host};dbname={$name}", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<strong>Database connection succcess</strong>";
}catch(PDOException $err){
  die( "Error:" . $err->getMessage());
}