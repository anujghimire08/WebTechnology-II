<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calling a PHP function on a button click</title>
</head>

<body>
  <form method="post">
    <button name="submit">Send</button>
  </form>
</body>

</html>

<?php
   $print_name = fn()=> "I'm Anuj";
   
  if(isset($_POST["submit"])){
   $val =  $print_name();
   echo $val;
  }

 
?>