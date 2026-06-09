<?php

  spl_autoload_register(function($class){
    include($class . ".php");
  });
  
  $operation1 = new basics();
  $operation2 = new BankAccount();

?>