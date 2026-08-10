<?php 
 class Pet {
  function __construct(public string $name , public int $price){}
  function __destruct()
  {
    echo('Object Removed');
  }
 }
 $dog = new Pet("Votey", 12000);
 echo nl2br("Dog Name: " . $dog->name  ."\nDog Price:" . $dog->price, true);
echo "<br/>";