<?php

class Income extends Transaction
{
  public function __construct()
  {
    $this->type = TransactionType::INCOME;
  }
}
