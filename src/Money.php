<?php

namespace HomeWork;
class Money
{

    private $amount;
    private $currency;

    public function __construct($amount, $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        if(!is_int($amount)) {
            throw new Exception('Invalid Argument Exception');
        }
        $this->amount = $amount;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        if (strlen($currency) != 3) {
            throw new Exception('Invalid Argument Exception');
        }
        $this->currency = $currency;
    }

    public function equals(Money $money)
    {
        if ($this->getCurrency() != $money->getCurrency() && $this->getAmount() != $money->getAmount()) {
            return false;
        }
        return true;
    }
    public function add(Money $money)
    {
        if($this->getCurrency() != $money->getCurrency()) {
            throw new Exception('Invalid Argument Exception');
        }
        return $this->getAmount() + $money->getAmount();
    }
}

