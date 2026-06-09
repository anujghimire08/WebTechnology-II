<?php
    include("config.php");
    class crud{
        private $conn;
        function __construct($connection){
          $this->conn = $connection;
        }

        function getData(){
          $emps = $this->conn->query("SELECT * FROM employees");
          $res = $emps->fetchAll(PDO::FETCH_ASSOC);
          print_r($res);
        }
        function updateData(){
          $emps = $this->conn->prepare("UPDATE employees SET name=? where id= ? ");
          $status =  $emps->execute(["Rita",23]);
          echo ($status)? "updated" : "update failed";
        }
        function setData(){
          $emps = $this->conn->prepare("INSERT INTO employees (name,workinghrs,work) VALUES (?,?,?)");
          $status = $emps->execute(["Ramesh",9,"Tutor"]);
          echo ($status)? "seted" : "set failed";
        }
        function deleteData(){
          $emps = $this->conn->prepare("DELETE FROM employees WHERE id= ? ");
          $status = $emps->execute([25]);
          echo ($status)? "deleted" : "delete failed";
        }

        
    }
    $obj = new crud($connection);
    $obj->getData();
    $obj->updateData();
    $obj->setData();
    $obj->deleteData();

?>