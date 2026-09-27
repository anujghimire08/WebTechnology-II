<?php 

require_once "config.php";
$stmt = $pdo->prepare("SELECT * FROM user");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_OBJ);
print_r($users);