<?php 

  abstract  class Freature{
    public function makeSound(){
      echo "wowowow";
    }
    public abstract function eat($food);
  }

class Animal extends Freature {
    function eat($food){
      echo $food;
    }
}

$dog = new Animal();
$dog->eat("pedegri");
$dog->makeSound();
?>