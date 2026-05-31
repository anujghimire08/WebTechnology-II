<?php
  // setcookie(name, value, expire, path, domain, secure, httponly);
  setcookie("name", "Anuj Ghimire", time()+ 86400,true);

   echo $_COOKIE["name"] ?? "no cookie";

?>