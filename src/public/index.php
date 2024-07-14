<?php

require_once '../Customer.php';
require_once '../PaymentProfile.php';
require_once '../Transaction.php';
require_once '../Id.php';

$transaction = new Transaction(5, 'Test');
$transaction->setCustomer(new Customer());
$transaction->getCustomer()->setPaymentProfile(new PaymentProfile());
$transaction->getCustomer()->getPaymentProfile()->setId(new Id());
echo $transaction->getCustomer()->getPaymentProfile()->getId()->getNumber();


?>
