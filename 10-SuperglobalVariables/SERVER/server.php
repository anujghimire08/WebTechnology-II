<?php
  echo "<pre>";
  print_r($_SERVER);
  echo $_SERVER["DOCUMENT_ROOT"];
  echo $_SERVER["SERVER_ADMIN"];
  echo $_SERVER["PHP_SELF"];
  echo $_SERVER["REQUEST_METHOD"];
  echo "</pre>";
?>