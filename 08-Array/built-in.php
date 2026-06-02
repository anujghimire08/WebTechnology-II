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
    array_splice($arr ,2,1);
    echo "<br>";
    print_r($arr);

    // -------------------------------

    echo "<br>-----------------------------------------<br>";

    $users=["ram","shyam","hari","sita","gita","ram"];
    // $users="xsdj";
    echo (is_array($users))? "it's array<br>" : "it's not array<br>";

    unset($users[2]); // specific arr val del
    print_r($users);
    echo "<br>";

    echo implode(",",$users); // arr to str
    echo "<br>";

    $nam = "abc,def,ghi";
    print_r(explode(",",$nam));
    echo "<br>";

    
    $users1=["ram","shyam","hari","sita","gita","rita"];
    print_r(array_merge($users,$users1));
    $mergearr = array_merge($users,$users1);
    echo "<br>";


    print_r(array_unique($mergearr));


?>