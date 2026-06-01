<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="user_name" placeholder="username">
    <input type="number" name="user_age" placeholder="age" min="1">
    <button type="submit">Display & Save Json to local file</button>
  </form>
</body>

</html>

<?php

  if($_SERVER["REQUEST_METHOD"]==="POST"){
  $data = ["name"=>$_POST["user_name"],"age"=>$_POST["user_age"]];
  $Json = json_encode($data, JSON_PRETTY_PRINT);
  // o/p =   '{"name":"anuj","age":10}';
  // var_dump($Json);
   echo "<pre>" . $Json . "</pre>";
   file_put_contents("abcd.json",$Json);
   echo "<p style='color:green'>Data also saved successfully to file...!</p>";
  }

 
?>