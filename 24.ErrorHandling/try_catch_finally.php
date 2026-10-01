<?php

$balance = 4000000;
$withdraw = 7000;

try {
  if ($withdraw > $balance) throw new Exception("paisa xaina nikal na khojxas");

  $balance -= $withdraw;
  echo "{$withdraw} paisa gayo tero bhaii";
} catch (Exception $e) {
  echo $e->getMessage();
}
