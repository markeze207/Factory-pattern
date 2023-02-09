<?php

namespace Factory;

interface PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface;
}