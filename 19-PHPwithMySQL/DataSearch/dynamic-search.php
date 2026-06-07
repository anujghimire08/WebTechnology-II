<?php

  include("../DataRetrieval/config.php");
  // print_r($_POST);
  // $isSubmit = $_POST["submit"]==="received"? true : false;
  if(isset($_POST["queryname"]) && trim($_POST["queryname"])!==""){
    $name = trim($_POST["queryname"]);
    // echo $name;
    // $stm = $connection->prepare("SELECT * FROM employees WHERE name='$name'");
    $stm = $connection->prepare("SELECT * FROM employees WHERE name like ? ");

    $stm->execute(["%$name%"]);
    $rows = $stm->fetchAll(PDO::FETCH_OBJ);
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";
    // echo count($rows);
    if(count($rows)>0){
    echo "<table frame='box' rules='all' cellpadding='5'>
    <tr>
      <th>S.N</th>
      <th>Name</th>
      <th>Working Hours</th>
      <th>Work</th>
    </tr>";
    foreach($rows as $row){
      echo "<tr>";
      echo "<td>" . $row->id . "</td>";
      echo "<td>" . $row->name . "</td>";
      echo "<td>" . $row->workinghrs . "</td>";
      echo "<td>" . $row->work . "</td>";
      echo "</tr>";
    }
      echo "</table>";
    }else{
        echo "no user data result found";
    }
  }else{
    echo "no data sumbitted";
  }
  
?>