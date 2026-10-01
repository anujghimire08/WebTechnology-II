<?php

echo __LINE__; #gives line no where its running.
echo "</br>";
echo __FILE__; #gives the full file path and file name from root of the current file. 
echo "</br>";
echo __DIR__; #gives the current directory of the file without trailing slash
echo "</br>";
function funcNAME()
{
  echo __FUNCTION__;
  #gives the name of the function under whose scope its in.
}
funcNAME();
echo "</br>";

trait Name
{
  function giveTraitName()
  {
    echo __TRAIT__;
  }
}

class Person
{
  use Name;
  function showClassName(): string
  {
    return __CLASS__;
  }
  function mtds(){
     echo __METHOD__;
  }
}
$obj = new Person();
echo $obj->showClassName();
echo "</br>";

$obj->giveTraitName();

echo "</br>";

$obj->mtds();


