<?php
/* 
    Viết PHP một lớp có tên là "BankAccount" với các thuộc tính như "accountNumber" và "balance". 
    Thực hiện các phương thức gửi và rút tiền từ tài khoản.
*/
class BankAccount
{
    private $accountNumber;
    private $balance;
    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }
    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Đã nạp thêm " . $this->balance . " vào tài khoản: " . $this->accountNumber . "</br>";
    }
    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Đã rút " . $amount . " ra tài khoản: " . $this->accountNumber . "</br>";
        } else {
            echo "Số tiền tài khoản không đủ để rút" . "</br>";
        }
    }
    public function surplus()
    {
        echo "Số dư hiện tại là: " . $this->balance;
    }
};

$bankAccount = new BankAccount('SB2');
$bankAccount->deposit(1000);
$bankAccount->withdraw(800);
$bankAccount->surplus();
// $bankAccount->withdraw(900);
