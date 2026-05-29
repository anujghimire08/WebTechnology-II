<?php
// Defining an associative array with key => value pairs
$userDetails = [
    "name" => "anuj",
    "age" => 100,
    "city" => "pokhara",
    "email" => "contact.anujghimire@gmail.com",
];

// Accessing a value using its key
// echo $userDetails["name"]; 
// echo $userDetails["age"]; 
// echo $userDetails["city"]; 
// echo $userDetails["email"]; 

foreach ($userDetails as $key => $value) {
  // echo $userDetails[$key];
  // echo $key;
  // echo $value;
}
?>