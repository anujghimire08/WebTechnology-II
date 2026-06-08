<?php

  class A{
    function setInfo($val) : mixed {
      $this->name = $val ;
      echo "value set<br/>";
      return $this;
    }
    function printInfo() : void {
      echo $this->name ?? "user";
    }
  }
  $obj = new A();
  $x = $obj->setInfo("xyz")->printInfo();
?>