<?php
abstract class Shape {
    abstract public function area();
    abstract public function perimeter();
}

abstract class Circle extends Shape {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Circle1 extends Circle {
   public function perimeter(){
    return 2 * 3.14 * $this->radius;
   }
}

$circle = new Circle1(5);
echo $circle->area();
echo "<br>";
echo $circle->perimeter();

?>