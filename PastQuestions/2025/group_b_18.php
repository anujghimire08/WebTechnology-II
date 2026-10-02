<?php 
   /* A file named "employee.txt" contains the list of employees' name. Write a program to read the content of the file and displays all employees whose name starts with 'A'. */
$path = "employee.txt";
$file = fopen($path, "r");
while(($name = fgets($file))!== false){
  $name= trim($name);
  if(str_starts_with($name, "A")) echo "{$name} <br/>";
}
fclose($file);