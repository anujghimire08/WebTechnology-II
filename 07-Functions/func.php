<?php
    function greetUser($val = "user") {
        echo "Welcome $val";
    }
    greetUser("xyz");
?>


<?php

   function Sum($x,$y) {return $x + $y;};
   echo "<h1 style='color:red'>" . Sum(rand(),rand()) ."</h1>";

?>