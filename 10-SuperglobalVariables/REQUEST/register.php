<?php
  // print_r($_REQUEST);
  if($_REQUEST){
    $_REQUEST["xyz"] = "abc";
    print_r($_REQUEST);
    foreach($_REQUEST as $key => $val) {
      echo $key .  "=>" . $val . "<br>";
    }
  }
?>