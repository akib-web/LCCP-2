<?php

class ExpenceCategory extends Category
{
  // public $type;
  // public $name;
  public function __construct(string $name)
  {
    $this->type = TransactionType::EXPENCE;
    $this->name = $name;
  }
}