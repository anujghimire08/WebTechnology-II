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

$games = array(
  array("adventure"=> "gta","thriller"=> "reddead"),
  array("simple"=> "ludo", "complex"=> "roblex")
);

foreach($games as $game){
  foreach($game as $key => $value){
    echo $key , " " , $value;
    echo "<br>";
  }
}   

foreach ($userDetails as $key => $value) {
  // echo $userDetails[$key];
  // echo $key;
  // echo $value;
}
?>