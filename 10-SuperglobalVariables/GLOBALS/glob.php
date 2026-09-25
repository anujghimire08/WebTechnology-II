<?php
include("../../04-DataTypes/type.php");
$a  = "10";
$arry = ["xyzdsd"];
const x = 100; // not include
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
$GLOBALS["a"] = 5;
var_dump($GLOBALS["arry"]);


#after a value update
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
