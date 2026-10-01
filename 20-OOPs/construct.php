<?php

 class Person {
   function __construct(){
      echo "obj created";
   }
   function __destruct(){
    echo "obj destroyed";
   }
 }

 $p1 = new Person();
