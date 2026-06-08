<?php

class basics {
    public $name;

    public function __construct($name = null) {
        $this->name = $name;
    }

    function add($a, $b) {
        return $a + $b;
    }

    function displayName() {
        return $this->name;
    }
}

$operation1 = new basics();
echo $operation1->add(1, 20);
echo "<br>";

$operation2 = new basics();
echo $operation2->add(1.5, 1.5);
echo "<br>";

$nameObj = new basics("Anuj");
echo $nameObj->displayName();

?>