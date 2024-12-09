<?php 
class BankAcount 
{
    private $balance = 0;
    public function deposit($amout) {
        $this->balance += $amout;
    }
    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAcount();

$account->deposit(100);
$account->deposit(100);

echo $account->getBalance();