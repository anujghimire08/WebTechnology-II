<?php
$path = "test.txt";
$file = fopen($path, "r");
$content = fread($file, filesize($path));
// echo $content;
// OR
echo file_get_contents($path);
