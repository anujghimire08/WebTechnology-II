<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie - HTML</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="user" placeholder="username">
    <button name="button" value="set">Set Cookies</button>
    <button name="button" value="show">Display Cookies</button>
    <button name="button" value="delete">Delete Cookies</button>
  </form>
</body>

</html>


<?php
    // print_r($_POST);
    // print_r($_POST["button"]);
    if(isset($_POST["button"])){
    if($_POST["button"]==="set"){
      setcookie("user",$_POST["user"]);
      echo "cookie set";
    }

    if($_POST["button"]==="show"){
      if(isset($_COOKIE["user"])){
        echo "cookie displaying..<br>";
        echo $_COOKIE["user"];
      }
      
    }
    
    if($_POST["button"]==="delete"){
      setcookie("user",null,-1);
      echo "cookie removed";
    }

    }

?>