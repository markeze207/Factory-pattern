<?php

namespace Factory;

class CashPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        return new CashPayment();
    }
}