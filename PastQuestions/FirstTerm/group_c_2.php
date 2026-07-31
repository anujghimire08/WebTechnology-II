<?php
  $courses = "it123,it456,it789";
  $courseArray = explode(",",$courses);
  $courseArray[1] = strtoupper($courseArray[1]);
  var_dump( $courseArray);
  $courseArrayString = implode("|", $courseArray);
  echo $courseArrayString;
?>