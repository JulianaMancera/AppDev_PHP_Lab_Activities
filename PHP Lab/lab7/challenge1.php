<?php
class BankTransaction
{
    public $bank_name;
    public $transaction;
    private $account_no;
    private $amount;
    private $savings_amount = 10000;
    public function __construct($bank_name, $account_no, $transaction, $amount)
    {
        $this->bank_name = $bank_name;
        $this->transaction = strtoupper($transaction);
        $this->account_no = $account_no;
        $this->amount = $amount;
    }

    public function getAccountNo() {
        return $this->account_no;
    }

    public function setAccountNo($account_no) {
        $this->account_no = $account_no;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($amount) {
        if ($amount < 0) {
            echo "Invalid amount!\n";
        } else {
            $this->amount = $amount;
        }
    }
    public function getSavingsAmount() {
        return $this->savings_amount;
    }

    public function setSavingsAmount($savings_amount) {
        $this->savings_amount = $savings_amount;
    }
    public function getInfo()
    {
        echo "Bank Name: ". $this->bank_name. '<br>';
        echo "Customer Account No: ". $this->getAccountNo(). '<br>';
        echo "Type of Transaction: ". $this->transaction. '<br>';
        echo "Current Balance: ". $this->getSavingsAmount(). '<br>';
        echo "Amount: ". $this->getAmount(). '<br>';
    }

    public function newBalance()
    {
        switch($this->transaction)
        {
            case 'D':
                $this->setSavingsAmount($this->getSavingsAmount() + $this->getAmount());
                echo 'New Balance: '. $this->getSavingsAmount(). '<br>';
            break;

            case 'W':
                if ($this->getAmount() > $this->getSavingsAmount())
                {
                    echo 'Insufficient funds!'. '<br>';
                }
                else
                {
                    $this->setSavingsAmount($this->getSavingsAmount() - $this->getAmount());
                    echo 'New Balance: '. $this->getSavingsAmount(). '<br>';
                }
            break;

            default:
            echo 'Unable to process this transaction! Invalid Transaction type!'. '<br>';
        }
    }
}

$customer1 = new BankTransaction('BDO', 'ACNO0000001', 'W', 3000);
$customer2 = new BankTransaction('BPI', 'ACNO0000002', 'D', 3000);
$customer3 = new BankTransaction('METROBANK', 'ACNO0000003', 'AB', 3000);

echo 'CUSTOMER 1: Lance'. '<br>';
$customer1->getInfo(). '<br>';
$customer1->newBalance(). '<br>';
echo '<br>';

echo 'CUSTOMER 2: Mark'. '<br>';
$customer2->getInfo(). '<br>';
$customer2->newBalance(). '<br>';
echo '<br>';

echo 'CUSTOMER 3: Vinice'. '<br>';
$customer3->getInfo(). '<br>';
$customer3->newBalance(). '<br>';
