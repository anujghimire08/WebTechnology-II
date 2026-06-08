<?php

require "user.php";
require "admin.php";


$ad = new A\Admin();
echo $ad->show();

echo "<br>";

$u = new B\Admin();
echo $u->show();

?>