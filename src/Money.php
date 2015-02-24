<?php

namespace miukoba\TDD;

abstract class Money
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @param $amount
     * @param $currency
     */
    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param $multiplier
     * @return Money
     */
    abstract public function times($multiplier);

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money)
    {
        return
            (
                $this->amount === $money->amount
                && get_class($this) === get_class($money)
            );
    }

    public function currency()
    {
        return $this->currency;
    }

    /**
     * @param $amount
     * @return Dollar
     */
    public static function dollar($amount)
    {
        return new Dollar($amount, 'USD');
    }

    /**
     * @param $amount
     * @return Franc
     */
    public static function franc($amount)
    {
        return new Franc($amount, 'CHF');
    }

}
