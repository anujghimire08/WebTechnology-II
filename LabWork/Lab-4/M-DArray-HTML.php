<?php
    $persons = array(
      array("id"=> 1,"name"=>"bibidh","age"=> 2, "gender"=> "male"),
      array("id"=> 2,"name"=>"sushant","age"=> 20, "gender"=> "male"),
      array("id"=> 3,"name"=>"jiya","age"=> 120, "gender"=> "female"),
      array("id"=> 4,"name"=>"nischal","age"=> 122, "gender"=> "male"),
    );
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>M-DArray-HTML</title>
</head>
<body>

  <table rules="all" frame="box" cellpadding="10">
    <caption>User's Details</caption>
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($persons as $person){ ?>
          <tr>
            <td><?=  htmlspecialchars($person["id"])?></td>
            <td><?=  htmlspecialchars($person["name"])?></td>
            <td><?=  htmlspecialchars($person["age"])?></td>
            <td><?=  htmlspecialchars($person["gender"])?></td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
  
</body>
</html>