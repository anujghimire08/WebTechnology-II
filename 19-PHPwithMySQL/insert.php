<?php

require_once "config.php";
$name = "Sujan Thapa";
$tech = "JavaScript";
$email = "sujan@gmail.com";
# ? Positional placeholder #
// $stmt  = $pdo->prepare("INSERT INTO user (name,tech,email) VALUES(?,?,?)");
// $stmt->execute([
//   $name, $tech, $email
// ]);
# Named placeholder :name #
$stmt = $pdo->prepare("INSERT INTO user (name,tech,email)  VALUES (:name, :tech, :email)");
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":tech", $tech, PDO::PARAM_STR);
$stmt->bindValue(":email", $email, PDO::PARAM_STR);
$stmt->execute();
