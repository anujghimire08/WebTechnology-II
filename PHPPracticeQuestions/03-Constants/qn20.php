<?php

  /* Global Scope Constant -> Define a constant inside a function using define() and access it outside the functon to demonstrate global scope. */

  function scope() : void {

    define("PI",3.1416);
    
  }
  scope();
  echo PI;


