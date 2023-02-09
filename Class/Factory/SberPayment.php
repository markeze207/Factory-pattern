<?php

namespace Factory;

class SberPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        echo 'Sber pay success' . $order->getSum() . ' rub';
    }
}