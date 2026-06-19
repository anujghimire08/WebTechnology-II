<?php

 /*function with Array -> Write a funtion that accepts an array of numbers and returns their sum and average. */

 function calculateSumAndAverage($numbers) {
    $sum = array_sum($numbers);
    $avg = $sum / count($numbers);

    return [
        "sum" => $sum,
        "avg" => $avg
    ];
}

$res = calculateSumAndAverage([1,2,3,4,5]);
echo "Sum: " . $res['sum']   . ", Average: " . $res['avg'];