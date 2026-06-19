<?php

  /* foreach Loop -> Create an array of five city names and use foreach to display each city with its index. */

  $arr = ["brt","pkhr", "ithr", "ktm" , "dhrn"];
  foreach($arr as $idx => $val){
    echo  $idx . " -> " . $val . "<br>";
  }