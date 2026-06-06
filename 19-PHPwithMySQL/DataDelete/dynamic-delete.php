<?php 

    include("../DataRetrieval/config.php");
    $sql = $connection->query("SELECT * FROM employees");
    echo "<h1>Employee Management</h1>";
    echo "<table frame='box' rules='all' cellpadding='10'> <tr><th>ID</th><th>Name</th><th>Working Hours</th><th>Work</th><th>Action</th></tr>";
    if($sql->rowCount()>0){
      while($res = $sql->fetch(PDO::FETCH_ASSOC)){
      echo "<tr>";
      echo "<td>" . $res['id'] . "</td>";
      echo "<td>" . $res['name'] . "</td>";
      echo "<td>" . $res['workinghrs'] . "</td>";
      echo "<td>" . $res['work'] . "</td>";
      echo "<td><form method='post'><button style='background-color:red;color:white;border:none' name='dlt' value='". $res['id']. "'>Delete</button></form></td>";


      echo "</tr>";

  }
    }

    echo "</table>";

    // print_r($_POST);
   if(isset($_POST["dlt"])){
    $sql = $connection->query("DELETE FROM employees WHERE employees.id='". $_POST['dlt'] . "';");  
   }


  ?>