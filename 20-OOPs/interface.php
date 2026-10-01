<?php

interface Calcualtor
{
  public function add(): int;
}

class Phone implements Calcualtor
{

  public function __construct(
    private int $num1,
    private int $num2
  ){}
  

  public function add(): int
  {
    return $this->num1 + $this->num2;
  }
}


$oppo = new Phone(1,2);
echo $oppo->add();
