<?php

namespace Factory;

class PaymentHelper
{
    public static function getPaymentFactor(string $paymentType): PaymentFactoryInterface
    {
        switch($paymentType)
        {
            case 'sber':
                return new SberPaymentFactory();
            case 'cash':
                return new CashPaymentFactory();
            default:
              throw new \Exception('undefined payment types');
        }
    }
}