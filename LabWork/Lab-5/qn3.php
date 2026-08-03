<?php

class Person
{
  protected string $name;
  protected string $email;
  function getPerson()
  {
    return "Name: $this->name, Email: $this->email";
  }
  function setPerson($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }
}

class Student extends Person
{
  protected string $studentID;
  protected string $Course;
  function getStudent()
  {
    return "Name: $this->name , Email: $this->email, Student ID: $this->studentID, Course: $this->Course";
  }
  function setStudent($name, $email, $id, $course)
  {
    parent::setPerson($name, $email);
    $this->studentID = $id;
    $this->Course = $course;
  }
}

class Staff extends Person
{
  protected int $employeeID;
  protected string $department;
  function setStaff($name, $email, $employeeID, $department)
  {
    parent::setPerson($name, $email);
    $this->employeeID = $employeeID;
    $this->department = $department;
  }
  function getStaff()
  {
    return "Name: $this->name , Email: $this->email ,Student ID: $this->employeeID, Course: $this->department";
  }
}
$std1 = new Student();
$std1->setStudent("Ram", "ram@gmail.com", 2, "DSA");
echo $std1->getStudent();
echo "<br/>";
$staff1 = new Staff();
$staff1->setStaff("Arjun", "arjun@gmail.com", 1, "IT");
echo $staff1->getStaff();
