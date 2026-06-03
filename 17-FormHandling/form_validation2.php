<?php
    // echo "<pre>";
    // print_r($_SERVER);
    // print_r($_FILES);
    // echo "</pre>";

    echo "<h1> Reading From User File..........</h1><br>";
    if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_FILES["user_file"]["name"])){
      // echo "<pre>"; 
      // print_r($_FILES);
      // echo "</pre>";

      echo "<br>";
      echo file_get_contents($_FILES["user_file"]["tmp_name"]) ?? die("not found");
    }else{
      echo "File: not found!!";
    }
    
?>