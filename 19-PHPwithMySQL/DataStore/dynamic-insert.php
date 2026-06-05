<?php

  // print_r($_POST);
  include("../DataRetrieval/config.php");

  if(isset($_POST["username"]) && $_SERVER["REQUEST_METHOD"]==="POST"){
      $sql = "INSERT INTO employees (name,workinghrs,work) VALUES (?,?,?)";
      $emp = $connection->prepare($sql);
      $res =  $emp->execute([
        $_POST["username"],
        $_POST["workinghrs"],
        $_POST["work"],
      ]);
    echo ($res)? "Inserted successfully! " . $connection->lastInsertId(): "Inserted unsuccessfull!";
  }else{
    die("something wrong in db or something else");
  }

?>