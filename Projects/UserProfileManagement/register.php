<?php

  require_once("config.php");
  if(isset($_POST['register'])){

    $username = trim($_POST['username']);
    $useremail = trim($_POST['useremail']);
    $password = trim($_POST['password']);

    if(!empty($username) && !empty($useremail) && !empty($password)){
      $hashpassword = password_hash($password,PASSWORD_BCRYPT,["cost"=>12]);

       $check = $connection->prepare("SELECT * FROM users WHERE email = ?");
      $check->execute([$useremail]);
      $data = $check->fetch(PDO::FETCH_ASSOC);
      if($data) die("email already exist");

      $stmt = $connection->prepare("INSERT INTO users (username,email,PASSWORD) VALUES (?,?,?) ");
      
      $stmt->execute([$username , $useremail, $hashpassword]);
      header("Location: main.php");

    }else{
      die("fill all fields");
    }

  }

 