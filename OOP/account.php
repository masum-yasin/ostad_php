<?php
class Account{
    private $accountNumber;
    private $balance;
    private $withDraw;
    public function balance(){
        echo "total Balance";
    }
    public function Withdraw(){
    echo 'withdraw';
    }


}

$acc = new Account();
$acc->balance(20500);
echo "<br>";
$acc->Withdraw(5000);

?>