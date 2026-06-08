<?php

  trait Balance{
    function displayBalance($blc): int{
      return $blc;
    }
  }

  trait PinCode{
    function displayPin($pin) : string {
      return str_repeat("*",strlen($pin));
    }
    
  }

  class Bank{
    use Balance,PinCode;
    
    private $blc = 1000, $pin = "2830";
    function getInfo(){
      return "Balance: " .  $this->displayBalance($this->blc) . "<br>" . "Pin: " . $this->displayPin($this->pin);
    }
    
  }
  $bankObj = new Bank();
  echo $bankObj->getInfo();

?>