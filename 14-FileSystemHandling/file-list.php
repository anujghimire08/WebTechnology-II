<?php
    $path="./";
    $fileArr = scandir($path);
    $fileArr = array_diff($fileArr,array(".","..")); 
    // print_r($fileArr);
    foreach($fileArr as $file) echo "<a href='./$file' target='_blank' > $file </a><br>";
?>