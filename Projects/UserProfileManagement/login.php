<?php

  session_start();
  require_once("config.php");
  if(isset($_POST['login'])){
    $stmt = $connection->prepare("SELECT * FROM users");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['email'] = $data['email'];

  }