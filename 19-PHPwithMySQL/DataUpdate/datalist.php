<?php

  include("../DataRetrieval/config.php");
  $data = $connection->query("SELECT * FROM employees");
   echo "<h1>Employee Management</h1>";
    echo "<table frame='box' rules='all' cellpadding='10'> <tr><th>ID</th><th>Name</th><th>Working Hours</th><th>Work</th><th>Action</th></tr>";
  while($row= $data->fetch(PDO::FETCH_OBJ)){
      echo "<tr>";
      echo "<td>" . $row->id . "</td>";
      echo "<td>" . $row->name . "</td>";
      echo "<td>" . $row->workinghrs . "</td>";
      echo "<td>" . $row->work . "</td>";

      echo "<td><a href='form.php?id={$row->id}' style='background:blue;color:white;padding:5px 10px;text-decoration:none;'>Edit</a></td>";


      echo "</tr>";
  } 

?>