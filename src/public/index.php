<?php
declare(strict_types = 1);

use One\CustomProfile;
use Ramsey\Uuid\UuidFactory;
use One\Transaction;
use Two\Transaction as TwoTransaction;

require __DIR__.'/../vendor/autoload.php';

$id = new UuidFactory();
echo $id->uuid4().'</br>';

$transaction1 = new Transaction;
$transaction2 = new TwoTransaction;
$customer = new CustomProfile;
var_dump($transaction1);

?>
