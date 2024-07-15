<?php

declare(strict_types=1);

class Transaction
{
  protected TransactionType $type;
  private float $amount;
  protected Category $category;

  public static function getFileName()
  {
    return 'transactions';
  }
  public function setAmount(float $amount): void
  {
    $this->amount = $amount;
  }

  public function getAmount(): float
  {
    return $this->amount;
  }

  public function setCategory(Category $category): void
  {
    $this->category = $category;
  }

  public function getcategory(): Category
  {
    return $this->category;
  }
}