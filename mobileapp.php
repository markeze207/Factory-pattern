<?php

use Factory\Order;
use Factory\PaymentHelper;

$orderData = [
    [
        'order'=>new Order(3000),
        'paymentType'=>'cash',
    ],
    [
        'order'=>new Order(3000),
        'paymentType'=>'sber',
    ]

];

echo 'mobile app payment: ';

foreach($orderData as $orderDataItem)
{
    $order = $orderDataItem['order'];
    $paymentType = $orderDataItem['paymentType'];
    $payment = PaymentHelper::getPaymentFactor($paymentType)->createPayment();
    $payment->pay($order);
}