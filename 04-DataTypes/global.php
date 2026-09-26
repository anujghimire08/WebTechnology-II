<?php 

// function vitra global variables access garnu dinchaa
//  $xyz = fn() => $name = "udsdjsad"; global cant access
 $ag = 20;
 $name = "udsdjsad";

function printName(){
       global $name, $ag;
      print $name . $ag;
}

printName();
