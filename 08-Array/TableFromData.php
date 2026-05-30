<?php

$users = [
    [1, "John Smith", "john.smith@gmail.com", "New York"],
    [2, "Emma Wilson", "emma.wilson@yahoo.com", "London"],
    [3, "Michael Brown", "michael.brown@gmail.com", "Sydney"],
    [4, "Sophia Davis", "sophia.davis@outlook.com", "Toronto"],
    [5, "James Miller", "james.miller@gmail.com", "Kathmandu"]
];

  echo "<table rules='all' frame='box' cellpadding='5'>

    <thead>
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>";

    for($i = 0; $i<count($users);$i++){
      echo "<tr>";
      for($j = 0 ; $j < count($users[$i]);$j++){
        echo "<td>" .$users[$i][$j] ."</td>";
      }
      echo "</tr>";
    }
    echo " </tbody>
  </table>"; 

?>