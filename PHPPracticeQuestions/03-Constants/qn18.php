<?php

/* Magic Constants -> Display the following magic constants: LINE, FILE, DIR, FUNCTION inside a funcƟon */

function showMagicConstants() {
    echo "LINE: " . __LINE__ . "<br>";
    echo "FILE: " . __FILE__ . "<br>";
    echo "DIR: " . __DIR__ . "<br>";
    echo "FUNCTION: " . __FUNCTION__ . "<br>";
}

showMagicConstants();

  /* 
__LINE__ :  Shows the current line number where it is written.
__FILE__ :  Shows the full path and filename of the current file.
__DIR__ : Shows the directory of the file.
__FUNCTION__ : Shows the function name (showMagicConstants).
*/



