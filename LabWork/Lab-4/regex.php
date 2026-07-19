<?php
 
 if($_SERVER["REQUEST_METHOD"]==="POST"){
    $userinput = trim($_POST["user-number"]);
    if($userinput ==="") return;
    if(preg_match("/^(97|98)\d{8}/",$userinput)){
      echo "<span style='color:green'>Valid Number</span>";
    }else{
      echo "<span style='color:red'>Invalid Number</span>";
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regex</title>
</head>
<body>
  <form method="post">
    <h1>🇳🇵Nepal Phone Number Validation</h1>
    <input type="tel" name="user-number" />
    <button type="submit" name="submit">Check Validation</button>
  </form>
</body>
</html>