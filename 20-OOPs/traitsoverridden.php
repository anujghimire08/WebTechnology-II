<?php

  trait A{
    function greet() : string {
        return "hello it's A";
    }
  }
  trait B{
    function greet() : string {
        return "hello it's B";
    }
  }
  class Display{
    use A;
    use B{
      A::greet insteadof B;
      B::greet as greetB;
    }
    
  }
  $obj = new Display();
  echo $obj->greet();
  echo "<br/>";
  echo $obj->greetB();


?>