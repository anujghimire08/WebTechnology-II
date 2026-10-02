<?php

/* Explain indexed and associative array with an example. Write a PHP function that accepts multidimensional array named 'CountryCities' with country as keys and cities as values. Also, Display the countries and cities in PHP nested list format.
*/

$CountryCities = [
  "Nepal" => ["Kathmandu", "Pokhara", "Lalitpur"],
  "India" => ["Delhi", "Mumbai", "Kolkata"],
  "Japan" => ["Tokyo", "Osaka", "Kyoto"],
  "USA" => ["New York", "Los Angeles", "Chicago"]
];

 echo "<ol>";
foreach ($CountryCities as $country => $cities) {
  echo "<li>{$country}<ul>";
  foreach ($cities as $city) {
    echo "<li>{$city}</li>";
  }
  echo "</li></ul>";
}
 echo "</ol>";
