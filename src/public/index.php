<?php
declare(strict_types = 1);

use App\Example;
use Encapsulation\Response;
use Encapsulation\Transaction;

require __DIR__.'/../vendor/autoload.php';

$example = new Example;
$response = new Response();
$transaction = new Transaction();
$reflectPropertyId = new ReflectionProperty(Transaction::class, 'id');
$reflectPropertyName = new ReflectionProperty(Transaction::class, 'name');
$reflectionMethodName = new ReflectionMethod($transaction, 'myNameIs');

var_dump($response->getCode());
$response->setCode(560);
$response->setCode(90);
echo '</br>';

$transaction->process();
$reflectPropertyId->setAccessible(true);
$reflectPropertyName->setAccessible(true);
$reflectionMethodName->setAccessible(true);
#$reflectPropertyName->setValue($transaction, 'Govnoed');
var_dump($reflectPropertyName->getValue($transaction));
var_dump($reflectPropertyId->getValue($transaction));
var_dump($reflectionMethodName->invoke($transaction));
?>
