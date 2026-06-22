<?php 

$host = "127.0.0.1";
$username = "root";
$password = null;
$dbname = "userpic";

 try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $err) {
  echo "Error: " . $err->getMessage();
}