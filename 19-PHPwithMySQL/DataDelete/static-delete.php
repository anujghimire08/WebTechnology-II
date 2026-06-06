<?php

  include("../DataRetrieval/config.php");
  $sql = $connection->query("DELETE FROM employees WHERE employees.id ='21'");
  echo "<br>";
  echo ($sql)? "delete success" : "delete unsuccess";
  
?>