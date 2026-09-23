<?php
  setcookie("themephp","light", time() + 2000);
  echo $_COOKIE["themephp"];
  setcookie("themephp", "light", time() - 3000, true);
  