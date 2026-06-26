<?php 
  session_start();
  include_once("config.ini.php");
  if(isset($_POST['register'])){
      $fname = trim($_POST['fname']);
      $lname = trim($_POST['lname']);
      $username = trim($_POST['username']);
      $email = trim($_POST['email']);
      $password = trim($_POST['password']);

      if(empty($fname)||empty($lname)||empty($username) || empty($password) || empty($email)){
        die("fill all fields");
      }

     $check = $connection->prepare("SELECT email FROM user where email = ? ");
     $check->execute([$email]);
     $isExist = $check->fetch(PDO::FETCH_ASSOC);
     if($isExist) die("email already exist");


     $stmt = $connection->prepare("INSERT INTO user (fname,lname,username,PASSWORD,email) VALUES (?,?,?,?,?)");
     $stmt->execute([$fname, $lname, $username, password_hash($password,PASSWORD_BCRYPT,["cost"=>12]) , $email]);

     header("Location: main.php");
     exit();
  }