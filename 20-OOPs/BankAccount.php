<?php
class BankAccount {
    const account_Name = "ansdyu23283jaewad38dy";
    protected $balance = 1000;
    private $pinCode = 273585;
    static protected $loan = 33000;

    public function getBalance() {
        return $this->balance;
    }
    static function statementBank() {
        return "you have current balance loan left " . self::$loan . " after your previous payment of rs.2000"; 
    }
    final protected function resetPincode($pin){
        $this->pinCode = $pin;
    }
    public function changePin($pin){
        $this->resetPincode($pin);
    }
    function displayPin(){
        return $this->pinCode;
    }
    
}

class Esewa extends BankAccount{
    // public function getBalance() {
    //     return $this->balance;
    // }
    // function resetPassword(){
    //     echo "hello ";
    // }  
    // cannot override final func
    

}

$eaccount = new Esewa();
 echo $eaccount->getBalance();
 echo "<br>";
 echo BankAccount::statementBank();
 echo "<br>";
 $eaccount->changePin(12345);
 echo $eaccount->displayPin();

?>