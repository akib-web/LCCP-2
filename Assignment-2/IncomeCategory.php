<?php

class IncomeCategory extends Category
{  
    public function __construct(string $name){
        $this->type = TransactionType::INCOME;
        $this->name = $name;
    }
}