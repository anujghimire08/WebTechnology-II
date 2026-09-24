<?php

$isPrime = function($num) {

    return ($num < 2)
        ? false
        : (function() use ($num) {

            for ($x = 2; $x < $num; $x++) {

                if ($num % $x === 0) {
                    return false;
                }
            }

            return true;

        })();
};

echo ($isPrime(89)) ? "prime" : "not prime";
