<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <?php
      include("../DataRetrieval/config.php");
      // echo $_GET["id"];
      $id = $_GET["id"] ?? null;
      if(!$id) die("invalid id");
      $emps = $connection->prepare("SELECT * FROM employees WHERE employees.id=?");
      $emps->execute([$id]);
      // var_dump($emps);
      $res = $emps->fetch(PDO::FETCH_ASSOC);
      // echo "<pre>";
      // print_r($res);
      // echo "</pre>";
      if(!$res){
        die("Employee not found");
      }else{
      $name = $res['name'];
      $wrkhrs = $res['workinghrs'];
      $work = $res['work'];
      // echo $name . $wrkhrs . $work;
      }
  ?>

  <form method="post">

    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">

    <input type="text" name="workinghrs" value="<?php echo htmlspecialchars($wrkhrs); ?>">

    <input type="text" name="work" value="<?php echo htmlspecialchars($work); ?>">

    <input type="submit">

  </form>

</body>

</html>