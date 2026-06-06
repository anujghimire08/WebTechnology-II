<?php

  include("../DataRetrieval/config.php");
  $sql = $connection->prepare("UPDATE employees set work=? WHERE id=?");
  $res = $sql->execute(["UI/UX",20]);
  // echo $res;
  echo ($sql->rowCount()>0)? "updated": "not updated";

?>