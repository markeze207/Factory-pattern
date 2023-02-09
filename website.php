<?php

use Factory\Order;
use Factory\PaymentHelper;

$orderData = [
    [
        'order'=>new Order(500),
        'paymentType'=>'cash',
    ],
    [
        'order'=>new Order(3000),
        'paymentType'=>'sber',
    ]

];

echo 'web-site payment: ';

foreach($orderData as $orderDataItem)
{
    $order = $orderDataItem['order'];
    $paymentType = $orderDataItem['paymentType'];
    $payment = PaymentHelper::getPaymentFactor($paymentType)->createPayment();
    $payment->pay($order);
}