<?php

$int = 18;
// echo var_dump ($int);
//  echo gettype(1);

$string="xyx";
// echo var_dump ($string);
//  echo gettype("xyx");


$float = 20.20;
// echo var_dump ($float);
//  echo gettype(1.2);

$boolean = true;
// echo var_dump ($boolean);
//  echo gettype(false);

$null = null;
// echo var_dump ($null);
//  echo gettype(null);

$array = ["abc","def","ghi" ,1,true];
// echo var_dump ($array);
//  echo gettype([]);

class car{
public $color;
public $price;
}
$class = new car();
$class->color = "green";
$class->price = 40000;
echo $class-> color;
echo var_dump ($class);

$resource = fopen("type.txt","r") or die("not found!!");
// echo gettype($resource);

?>