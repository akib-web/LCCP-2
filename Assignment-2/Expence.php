<?php

class Expence extends Transaction
{
  // public $type;
  public function __construct()
  {
    $this->type = TransactionType::EXPENCE;
  }
}