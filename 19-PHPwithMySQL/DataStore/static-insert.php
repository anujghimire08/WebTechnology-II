<?php

  include("../DataRetrieval/config.php");
  $employee = $connection->prepare("INSERT INTO employees (name,workinghrs,work) VALUES (:name,:workinghrs,:work)");
  $res = $employee->execute([
    ":name"=>"Hari",
    ":workinghrs"=> 3,
    ":work"=> "php learning",
  ]);
  
  if ($res) {
    echo "Inserted successfully. ID: " . $connection->lastInsertId();
} else {
    echo "Insert failed";
}
?>