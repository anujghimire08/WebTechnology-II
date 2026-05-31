<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SESSION</title>
</head>

<body>
  <h1>SESSION Demo</h1>
  <form action="" method="post">
    <input type="text" name="user_name" placeholder="username">
    <input type="text" name="user_role" placeholder="role">
    <button name="button" value="set">Set Session</button>
    <button name="button" value="get">Display Session</button>
    <button name="button" value="delete">Delete Session</button>
  </form>
</body>

</html>
<?php
  
  session_start();
  // print_r($_POST["button"]);
  if(isset($_POST["button"])){
    if($_POST["button"]==="set") {
      $_SESSION= [
        "user" => $_POST["user_name"],
        "role"=> $_POST["user_role"],
      ];
    }
    if($_POST["button"]==="get"){
       print_r($_SESSION);
    }
    if($_POST["button"]==="delete"){
      $_SESSION=[];
      session_destroy();
    }
  }

?>