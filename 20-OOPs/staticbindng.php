<?php

class BankAccount {
    protected static $bank = "Nepal Bank";

    public static function getBank() {
        return static::$bank;
    }
}

class Esewa extends BankAccount {
    protected static $bank = "Esewa Wallet";
}

echo Esewa::getBank();

?>