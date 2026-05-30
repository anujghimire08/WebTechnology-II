<?php
  // print_r($_REQUEST);
  if($_REQUEST){
    $_REQUEST["xyz"] = "abc";
    foreach($_REQUEST as $key => $val) {
      echo $key .  "=>" . $val . "<br>";
    }
  }
?>