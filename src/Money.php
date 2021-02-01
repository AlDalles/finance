<?php


namespace Hillel\finance\src;


class Money
{
    private float $amount;
    private \Hillel\finance\src\Currency $currency;

    public function __construct($amount, \Hillel\finance\src\Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }


    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCurrency(): \Hillel\finance\src\Currency
    {
        return $this->currency;

    }

    private function setAmount($amount): void
    {
        if (is_float($amount) || is_int($amount)) {
            $this->amount = floatval($amount);
        } else throw new \InvalidArgumentException($amount . " is not number!");

    }

    private function setCurrency(\Hillel\finance\src\Currency $currency): void
    {

        $this->currency = $currency;

    }

    public function equals(Money $money): bool
    {
        if ($this == $money) {
            return true;
        }
        return false;


    }

    public function add(Money $money): Money
    {
        if (!$this->currency->equals($money->currency)) {
            throw new \InvalidArgumentException("these objects have different currency, I can't sum them");

        }
        return new Money($this->getAmount() + $money->getAmount(), $this->currency);

    }


}