<?php
  include("../DataRetrieval/config.php");
  $id = $_GET["id"] ?? null;
  if(!$id) die("invalid id");


  // print_r($_POST);
  //  echo isset($_POST["name"]);
  if(!empty($_POST) && $_SERVER['REQUEST_METHOD']==="POST"){

    $emp = $connection->prepare("UPDATE employees SET name=:name,workinghrs=:wrkhrs,work=:work WHERE employees.id=:id");
     $res = $emp->execute([
      ":name"=>$_POST["name"],
      ":wrkhrs"=>$_POST["workinghrs"],
      ":work"=>$_POST["work"],
      ":id"=> $id,
     ]);
     
     header("Location:datalist.php?updated=1");
     exit();
    
  }

?>

<?php
      // echo $_GET["id"];
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


<form method="post" action="">

  <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">

  <input type="text" name="workinghrs" value="<?php echo htmlspecialchars($wrkhrs); ?>">

  <input type="text" name="work" value="<?php echo htmlspecialchars($work); ?>">

  <input type="submit" value="update">

</form>