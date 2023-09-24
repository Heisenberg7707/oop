<?php

require_once '../Customer.php';
require_once '../PaymentProfile.php';
require_once '../Transaction.php';

$transaction = new Transaction(5, 'Test');
$transaction->setCustomer(new Customer());
$transaction->getCustomer()->setPaymentProfile(new PaymentProfile());

for($i=0; $i<100; $i++){
    $transaction->setCustomer(new Customer());
    $transaction->getCustomer()->setPaymentProfile(new PaymentProfile());
    echo $transaction->getCustomer()?->getPaymentProfile()?->getId();
    echo '</br>';
}
?>
