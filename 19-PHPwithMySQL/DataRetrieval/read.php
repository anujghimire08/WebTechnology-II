<?php
  include("config.php");
  $connData = $connection->query("SELECT * FROM employees");
  // var_dump($connData);
  // var_dump($connData->fetch(PDO::FETCH_OBJ));

  echo "<table frame='box' rules='all' cellpadding='5'>

  <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Working Hours</th>
    <th>Work</th>
  </tr>";
  // var_dump($connData->rowCount());
  if($connData->rowCount()>0){
  while($row = $connData->fetch(PDO::FETCH_OBJ)){
    echo "<tr>";
    echo "<td>" . $row->id . "</td>";
    echo "<td>" . $row->name . "</td>";
    echo "<td>" . $row->workinghrs . "</td>";
    echo "<td>" . $row->work . "</td>";
    echo "</tr>";
    }
  }
  echo "</table>";

?>