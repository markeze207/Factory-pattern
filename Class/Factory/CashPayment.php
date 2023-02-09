<?php

namespace Factory;

class CashPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        echo 'Cash pay success ' . $order->getSum(). ' rub';
    }
}