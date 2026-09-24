<?php
$db_host = "localhost";
$db_name = "web2";
$db_user = "root";
$db_password = "sql123";

try {
  $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connected to db";
} catch (PDOException $err) {
  die("connection failed:" . $err->getMessage());
} 
