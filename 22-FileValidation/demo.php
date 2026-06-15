<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Handling</title>
</head>
<body>
  
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" >
    <button type="submit">Submit</button>
  </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    echo isset($_FILES['file']) ? "File key exists<br>" : "No file key<br>";
    if($_FILES['file']['error']===0){
      echo "file uploaded<br>";
    }
    if($_FILES['file']['error']===4){
      echo "file  not uploaded<br>";
    }

    if($_FILES['file']['size'] >=  1024 * 1024){
      echo "File SIze exceed than limit<br>";
    }else{
      echo "File SIze match with limit<br>";
    }


    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime =  finfo_file($finfo,$_FILES['file']['tmp_name']);
    // mime -> mulipurpose internet mail extensions
    echo $mime;
}



?>