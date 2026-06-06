<?php

  include("../DataRetrieval/config.php");
   echo "<br>";
  $sql = $connection->prepare("SELECT name FROM employees");
  $sql->execute(); // sql must manually execute where query implicitly does
  echo "<select> <option selected disabled>Select User</option>";  
  while($row= $sql->fetch(PDO::FETCH_ASSOC)){

  echo "<option value='" . $row['name'] . "'>" . $row["name"] . "</option>";
  }
  echo "</select>";
?>