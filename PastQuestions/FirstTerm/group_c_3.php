<?php

class Employee
{
  function __construct(private float $salary, public string $name) {}
  function getSalary(): void
  {
    echo "Rs." . number_format($this->salary, 2);
  }
}

$Employee1 = new Employee(1000, "Anuj");
$Employee1->getSalary();
