<?php 

 /* How do you iterate and traverse the multidimensional array in PHP? Explain with an example. */
    $mD= array(
      array(1,2,3,4,5),
      array(6,7,8,9,10),
    );

    foreach($mD as $arr){
      foreach($arr as $val) echo $val;
    }

