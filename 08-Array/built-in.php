<?php
   
    $arr = ["xyx","abc","def","jkl"];
    print_r($arr);
    echo "<br>";

    // push
    array_push($arr, "mno","rst");
    print_r($arr);

    // pop
    array_pop($arr);
    echo "<br>";
    print_r($arr);

    // unshift
    array_unshift($arr,"anuj","ghimire");
    echo "<br>";
    print_r($arr);

    // shift
    array_shift($arr);
    echo "<br>";
    print_r($arr);

    // splice
    array_splice($arr ,2);
    echo "<br>";
    print_r($arr);

?>