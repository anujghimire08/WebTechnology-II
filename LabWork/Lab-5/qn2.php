<?php 
 class Pet {
  function __construct(private string $name , private int $price){}
  function __destruct()
  {
    echo('Object Removed');
  }
 }
 $dog = new Pet("Votey", 12000);
