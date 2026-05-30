<?php


$users = [
    [
        "id" => 1,
        "name" => "John Smith",
        "mail" => "john.smith@gmail.com",
        "country" => "New York"
    ],
    [
        "id" => 2,
        "name" => "Emma Wilson",
        "mail" => "emma.wilson@yahoo.com",
        "country" => "London"
    ],
    [
        "id" => 3,
        "name" => "Michael Brown",
        "mail" => "michael.brown@gmail.com",
        "country" => "Sydney"
    ],
    [
        "id" => 4,
        "name" => "Sophia Davis",
        "mail" => "sophia.davis@outlook.com",
        "country" => "Toronto"
    ],
    [
        "id" => 5,
        "name" => "James Miller",
        "mail" => "james.miller@gmail.com",
        "country" => "Kathmandu"
    ]
];


  foreach($users as $user){
    foreach($user as $val){
      echo $val . "<br/>    ";
    }
  }

?>