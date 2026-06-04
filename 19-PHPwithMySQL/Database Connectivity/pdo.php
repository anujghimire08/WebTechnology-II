<?php

  $host = "localhost";
  $username = "root";
  $password = null;
  $database = "employee";

  try{
 
  $connection = new PDO("mysql:host=$host;dbname=$database",$username,$password);
  // var_dump($connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION));
  $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "connection success";
  }catch(PDOException $err){
    die("connection failed:" . $err->getMessage());
  }finally{
    echo "<br>";
    $res = $connection->query("SELECT * FROM employees");
    // print_r($row = $res->fetch(PDO::FETCH_ASSOC));
    while($row = $res->fetch(PDO::FETCH_ASSOC)){
      echo $row["name"] ."=" . $row["workinghrs"] ."<br>" ;
    }
  }

?>