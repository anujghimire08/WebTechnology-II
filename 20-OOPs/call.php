<?php

 class Math {

    function __call($method, $args) {
      if($method ==="add"){
        return array_sum($args);
      }else{
        echo "Method '$method' does not exist";
      }
    }
}

$obj = new Math();

// echo $obj->add(1,2,3,4,5);
echo $obj->subtract(1,2,3,4,5);


?>