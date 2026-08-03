<?php
interface vehicleFunction
{
  function start(): void;
  function stop(): void;
  function fuelStatus(): void;
}
class Vehicle implements vehicleFunction {
  function start():void{
    echo "Vehicle Start..";
  }
  function stop():void{
    echo "Vehicle Stop!";
  }
  function fuelStatus():void{
    echo "Fuel Down";
  }
}

$car = new Vehicle();
$car->start();
$car->stop();
$car->fuelStatus();

