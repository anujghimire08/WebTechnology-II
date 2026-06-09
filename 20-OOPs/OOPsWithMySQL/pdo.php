<?php

  include("config.php");
  
  class Connection{
      function __construct($connection){
        $this->connection = $connection;
      }
      function getData(){
        $emps = $this->connection->query("SELECT * FROM employees");
        $res= $emps->fetchAll(PDO::FETCH_ASSOC);
        print_r($res);
      }
  }
  
  $obj = new Connection($connection);
  $obj->getData();

?>