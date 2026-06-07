<?Php

  include("../DataRetrieval/config.php");
  $sql = $connection->prepare("SELECT * FROM employees Where name='sita'");
  $sql->execute();
  $emps = $sql->fetchAll(PDO::FETCH_ASSOC);
  echo "<br>";
  echo "<table frame='box' rules='all' cellpadding='10'> <tr><th>ID</th><th>Name</th><th>Working Hours</th><th>Job</th></tr>";
  // print_r($emps[0]);
  foreach($emps as $emp){
    echo "<tr>";
    echo "<td>" . $emp["id"] . "</td>";
    echo "<td>" . $emp["name"] . "</td>";
    echo "<td>" . $emp["workinghrs"] . "</td>";
    echo "<td>" . $emp["work"] . "</td>";
    echo "</tr>";
  }
  echo "<table>";
  

?>