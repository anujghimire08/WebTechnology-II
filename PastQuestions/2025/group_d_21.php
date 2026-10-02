<?php 

# Illustrate with an example to show the multiple inheritance.

namespace WEB2;

trait A {
    function showA() {
        echo "A";
    }
}

trait B {
    function showB() {
        echo "B";
    }
}

class C {
    use A, B;
}

$obj = new C();

$obj->showA();
$obj->showB();