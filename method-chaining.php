<?php

declare(strict_types=1);

class BankAccount
{

  public function __construct(
    public float $balance = 0
  )
  {
  }

  public function deposit(float $amount)
  {
    $this->balance += $amount;
    return $this;
  }
} 

$account = new BankAccount();
$account->deposit(100)->deposit(200)->deposit(300); // Actual method chaining

echo "Your current balance is: EUR $account->balance.<br />";