<?php 

    session_start();
    include_once("config.ini.php");
    if(isset($_POST['login'])){
        $stmt = $connection->prepare("SELECT * from user WHERE email = ?");
        $stmt->execute([$_POST['email']]);
        $res =  $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$res) die("invalid email or password");
        $password = $_POST['password'];
        if(!password_verify($password, $res['PASSWORD'])) die("Invalid password");
        $_SESSION['id'] = $res['id'];
        $_SESSION['email'] = $res['email'];
        $_SESSION['username'] = $res['username'];
        header("Location: main.php");
        exit();
    }

?>