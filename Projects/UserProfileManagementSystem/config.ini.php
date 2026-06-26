<?php

 try {
   $connection = new PDO("mysql:host=localhost;dbname=picupload","root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected";
 } catch (PDOException $err) {

 echo "Error: " .  $err->getMessage();
 }

?>