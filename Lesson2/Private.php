<?php
class BankAcount
{
    private $balance = 0;

    private function setBalance($amout)
    {
        $this->balance = $amout;
    }

    public function deposit($amout)
    {
        $this->setBalance($this->balance + $amout);
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new BankAcount();

$account->deposit(100);

echo $account->getBalance();

// $account->setBalance(200); ( có Lỗi Ngay )