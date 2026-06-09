<?php

class User {

    private $data = [];

    function __set($property, $value) {
        $this->data[$property] = $value;
        // print_r($this->data);
    }
    

    function __get($property) {
        return $this->data[$property] ?? "Not set";
    }
}

$obj = new User();

$obj->name = "Anuj";   
echo $obj->name;      

?>