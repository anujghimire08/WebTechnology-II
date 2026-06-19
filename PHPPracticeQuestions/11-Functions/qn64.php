<?php

 /*Default Parameters -> Create a function called generateEmail(firstName, lastName,
$domain = "gmail.com") that returns a complete email address.*/

function generateEmail($firstName, $lastName, $domain = "@gmail.com") {
    return $firstName . "." . $lastName  . $domain;
}

echo generateEmail("anuj", "ghimire");


 