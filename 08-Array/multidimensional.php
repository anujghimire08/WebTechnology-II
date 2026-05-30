<?php
    $array = [
      [1,"xyz","KTM"],
      [2,"abc","PKR"],
      [3,"jkl","DRN"]
    ];

    for($i = 0 ; $i<count($array);$i++){
      for($j=0;$j<count($array[$i]);$j++){
        echo $array[$i][$j] . " ";
      }
      echo "<br>";
    }

    // echo "<pre>" ;
    // print_r($array);
    // echo "</pre>";
?>