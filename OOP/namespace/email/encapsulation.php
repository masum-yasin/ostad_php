<?php
class Account{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber)
    {
         $this->accountNumber = $accountNumber;
        $this->balance=10000;

       
    }
    public function getBalance(){
       
        echo $this->balance;
    }
}
$check = new Account(786543);
$check->balance = 20000;
$check->getBalance();
?>