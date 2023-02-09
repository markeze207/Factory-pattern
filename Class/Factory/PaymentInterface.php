<?php

namespace Factory;

interface PaymentInterface
{
    public function pay(Order $order): void;
}