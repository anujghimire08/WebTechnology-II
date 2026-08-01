<?php

$idxArray  = [1, 2, 3];
for ($i = 0; $i < count($idxArray); $i++) echo $idxArray[$i];
$AssociativeArray = ["first" => 1, "second" => 2, "third" => 3];
foreach ($AssociativeArray as $key => $value) {
  echo $key;
  echo $value;
}
