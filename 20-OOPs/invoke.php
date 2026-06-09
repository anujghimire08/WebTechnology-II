<?php

 class Sum {
    function __invoke($a, $b) {
        // return $a + $b;
       return  $this->product($a,$b);
    }
    function product($a,$b){
      return $a * $b;
    }
}

$obj = new Sum();

echo $obj(5, 10);  

?>