<?php

class User {
    public function name(): string {
        return "Anuj";
    }
}

function showUser(User $user) {
    echo $user->name();
}

$obj = new User();
showUser($obj);



function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5, 10);
?>