<?php
    // print_r($_FILES);
    if(isset($_FILES['user_file'])){
      // echo "<pre>";
      // print_r($_FILES);
      // echo "</pre>";

     $path = basename($_FILES['user_file']["name"]);
    //  echo $path;
     $upload_path = "./uploads/". $path;
    //  echo $uplaod_path;
     echo move_uploaded_file($_FILES["user_file"]["tmp_name"], $upload_path) ? "file uplaod Success" : "file upload failed";
    }
?>