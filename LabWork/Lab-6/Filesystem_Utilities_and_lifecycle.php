<?php
$file = "data.txt";
file_put_contents($file, "PHP File Management");

if (file_exists($file)) {
    echo "File exists.<br>";
    echo "File Size: " . filesize($file) . " bytes<br>";
}

if (copy($file, "backup.txt")) {
    echo "File copied successfully.<br>";
}

if (rename("backup.txt", "newfile.txt")) {
    echo "File renamed successfully.<br>";
}

if (unlink("newfile.txt")) {
    echo "File deleted successfully.<br>";
}