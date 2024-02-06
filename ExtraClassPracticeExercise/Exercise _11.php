<?php
    class BankAccount
    {
        private $accountNumber;
        private $accountHolder;
        private $balance;

        public function __construct($accountNumber,$accountHolder,$initialBalance)
        {
            $this->accountNumber=$accountNumber;
            $this->accountHolder=$accountHolder;
            $this->balance=$initialBalance;
        }
        public function deposit($amount)
        {
            echo "$amount deposited in account"."<br>";
            $this->balance+=$amount;
        }
        public function withdraw($amount)
        {
            if ($amount <= $this->balance)
            {
                echo "$amount withdrawn from account"."<br>";
                $this->balance -= $amount;
            }
            else 
                echo "Insufficient Funds";
        }
        public function displayInfo()
        {
            echo "Account Number: {$this->accountNumber}, Account Holder: {$this->accountHolder}, Balance: {$this->balance} USD";
        }
    
    }
$account1 = new BankAccount("123456", "John Doe", 1000);
$account1->deposit(500);
$account1->withdraw(200);

$account1->displayInfo();

?>