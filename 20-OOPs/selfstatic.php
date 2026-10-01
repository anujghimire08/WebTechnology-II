<?php

namespace test;

class Student
{
  public const TYPE = "Student";
}

class GraduateStudent extends Student
{
  public const TYPE = "Graduate Student";

  public function show()
  {
    echo parent::TYPE;
  }
}

$student = new GraduateStudent();
$student->show();

/*
self:: - current class
parent::- parent class
static:: - actual called/child class
*/