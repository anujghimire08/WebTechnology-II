<?php
  // echo "<pre>";
  // print_r($_FILES);
  // echo "</pre>";
  // echo $_SERVER["REQUEST_METHOD"];
  // echo isset($_FILES["user_file"]);
  if($_SERVER["REQUEST_METHOD"]==="POST"){
    // echo $_FILES["user_file"]["error"];
  if($_FILES["user_file"]["error"]===0){
    // print_r($_FILES["user_file"]);
    $path = $_FILES["user_file"]["tmp_name"];
    $file = fopen($path,"r") or die ("Unable to read file");
    echo fread($file,filesize($path));
    fclose($file);
  }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="user_file">
    <input type="submit" value="Submit" name="button">
  </form>

</body>

</html>