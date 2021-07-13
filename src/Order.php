<?php


namespace App;


class Order
{
    protected $amount;

    protected $gateway;

    /**
     * Order constructor.
     * @param $gateway
     */
    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function processOrder(){
        return $this->gateway->charge($this->amount);
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }




}