<?php 

session_start();
require_once("config.ini.php");

if(!isset($_SESSION['id'])){
    header("Location: main.php");
    exit();
}

$userid = $_SESSION['id'];

if(isset($_FILES['userimg'])){

    if($_FILES['userimg']['error'] === 0){

        $fileName = $_FILES['userimg']['name'];
        $fileTmp  = $_FILES['userimg']['tmp_name'];
        $fileSize = $_FILES['userimg']['size'];

        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $fileTmp);

        $allowedExt = ['jpg','jpeg','png','webp'];
        $allowedMime = ['image/jpeg','image/png','image/webp'];

        if(in_array($ext, $allowedExt) && in_array($mime, $allowedMime)){

            if($fileSize > 4 * 1024 * 1024){
                die("File too large");
            }

            $newName = "profile".$userid.".".$ext;
            $destination = "uploads/".$newName;

            move_uploaded_file($fileTmp, $destination);

            $check = $connection->prepare("SELECT id FROM dp WHERE userid = ?");
            $check->execute([$userid]);

            if($check->fetch()){
                $stmt = $connection->prepare("
                    UPDATE dp 
                    SET path = ?
                    WHERE userid = ?
                ");
                $stmt->execute([$destination, $userid]);

            } else {
                $stmt = $connection->prepare("
                    INSERT INTO dp (userid, path)
                    VALUES (?, ?)
                ");
                $stmt->execute([$userid, $destination]);
            }

            header("Location: main.php");
            exit();

        } else {
            echo "Invalid file type";
        }

    } else {
        echo "Upload error";
    }

}

?>