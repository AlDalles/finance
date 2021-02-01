<?php

namespace Hillel\finance\src;
class Currency
{
    private $isoCode;


    public function __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }


    public function getIsoCode():string
    {
        return $this->isoCode;
    }


    private function setIsoCode($isoCode): void
    {
        if (\Hillel\finance\src\checkCurrency::check_currency($isoCode)) {
            $str_UP = mb_strtoupper($isoCode);
            $this->isoCode = $str_UP;

        } else throw new \InvalidArgumentException("$isoCode" . " its not correct Currency");
    }

    public function equals(Currency $currency):bool
    {
        if ($this->getIsoCode() == $currency->getIsoCode()) {
            return true;
        }
        return false;
    }


}