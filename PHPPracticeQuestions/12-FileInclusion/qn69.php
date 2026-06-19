<?php

/* require vs include -> Demonstrate the difference between require and include by including a missing file in both ways.*/

echo "INCLUDE TEST<br>";
include "missing.php";
echo "After include <br><br>";

echo "REQUIRE TEST<br>";
require "missing.php";
echo "After require <br>";

?>