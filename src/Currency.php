<?php

namespace HomeWork;


class Currency
{

    private $isoCode;

    public function __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode()
    {
        return $this->isoCode;
    }

    public function setIsoCode($isoCode)
    {
        $isoCodeArr = ['UAH', 'USD', 'EUR', 'GBP'];

        if (!in_array($isoCode, $isoCodeArr)) {
            echo 'Invalid Argument Exception';
        }
        $this->isoCode = $isoCode;
    }

    public function equals(Currency $currency)
    {
        if ($this->getIsoCode() != $currency->getIsoCode()) {
            return false;
        }
        return true;
    }
}
