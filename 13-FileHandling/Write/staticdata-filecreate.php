<?php

    $file = fopen("staticdata.txt","w") or die("unable to create file");
    fwrite($file,"hello it's anuj");
    fclose($file);
    echo "file created"; 
    
?>