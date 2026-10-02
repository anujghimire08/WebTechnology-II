<?php

/*
 How do you write your own exception? Explain with an example.
 */

$balance = 4000;
$withdraw = 3000;
try {
  if ($balance < $withdraw) {
    throw new Exception("insufficient balance");
    $balance -= $withdraw;
    echo "withdraw done";
  }
} catch (Exception $err) {
  echo "Error:" . $err->getMessage();
} finally {
  echo "transition ended";
}
