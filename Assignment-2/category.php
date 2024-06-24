<?php

class Category {
    public string $name;
    public TransactionType $type;

    public static function getModelName(){
        return 'categories';
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
    public function setType(TransactionType $type): void {
        $this->type = $type;
    }
    public function getType(): TransactionType {
        return $this->type;
    }

}