<?php


 $arrs = [1,2,3,4,5];
 foreach($arrs as $arr){
    if($arr === 4) continue 1;
    echo $arr;
 }