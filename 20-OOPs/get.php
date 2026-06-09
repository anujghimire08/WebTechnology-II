<?php


class User {

private $name = "Anuj";

function __get($property) {
echo "You tried to access: $property";
}
}

$obj = new User();

echo $obj->name;?>