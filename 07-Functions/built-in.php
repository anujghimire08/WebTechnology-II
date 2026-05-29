<?php
    $str = "hdskdsad";
    echo strlen($str);

    $val = true;
    echo var_dump($val);
    

    echo date("d"); // date
    echo date("l"); // day
    echo date("m"); // months num
    echo date("M"); // months may;

    echo is_string($str);

    $num = 123;
    echo is_int($num);

    echo rand();

    echo "before";
    die;
    exit;
    
    echo "after";


    echo substr($str, 4);

?>