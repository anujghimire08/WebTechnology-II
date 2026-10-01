<?php

$user = "anuj";
$pass = "anuj101";
if ($_SERVER["PHP_AUTH_USER"] !== $user || $_SERVER["PHP_AUTH_PW"] !== $pass) {
  header('WWW-Authenticate: Basic realm="My Website"');
  header("HTTP/1.0 401 Unauthorized");
  // echo $_SERVER["PHP_AUTH_USER"];
  // echo $_SERVER["PHP_AUTH_PW"];
  echo "invalid login data";
} else {
  echo "LOGIN";
}
