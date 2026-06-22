<?php 

  session_start();
  require_once("config.php");


  $userid = $_SESSION['id'];
  $path = $_SESSION['path'];
  $email = $_SESSION['email'];


 if(isset($_FILES['userprofile'])){

  if($_FILES['userprofile']['error'] === 0){

  $filePath = $_FILES['userprofile']['tmp_name'];
  $fileName = $_FILES['userprofile']['name'];
  $fileSize = $_FILES['userprofile']['size'];
  // echo $filePath;

  if($fileSize <= 2 * 1024 * 1024 ){

    $allowedExtension = ["jpeg","png","jpg","webp"];
    $allowedMime = ["image/jpeg","image/png","image/jpg","image/webp"];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $filePath);

    if(in_array($ext,$allowedExtension) && in_array($mime ,$allowedMime)){

      $fileNewName = "profile". $userid . ".$ext";
      $dest = "uploads/" . $fileNewName;
      move_uploaded_file($filePath, $dest);

      $stmt = $connection->prepare("INSERT INTO userimg (userid,path,email) VALUES (?, ?, ?)");
      $stmt->execute([$userid,$path,$email]);
      header("Location: main.php");
      exit();
    }else{
      echo "<p style='color:red'>file format not matched!</p>";
    }

  }else{
  echo "<p style='color:red'>file size limit exceed!</p>";
  }


  }else{
  echo "<p style='color:red'>file not sent due to error!</p>";
  }

 }else{
  echo "<p style='color:red'>file not sent by the user!</p>";
 }