<?php
    
    if(isset($_POST["button"])){
    $file = fopen("dynamicdata.txt","w") or die("unable to create file");
    fwrite($file, $_POST["content"]?? "");
    fclose($file);
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I/O Operation</title>
</head>

<body>
  <h1>I/O Operation</h1>
  <form action="" method="post">
    <textarea name="content" placeholder="Write abour PHP........" rows="5" cols="50"></textarea>
    <button name="button" value="send">send</button>
  </form>
</body>

</html>