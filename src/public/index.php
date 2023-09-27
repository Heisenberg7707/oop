<?php
declare(strict_types = 1);

use App\Transaction;

require __DIR__.'/../vendor/autoload.php';

$transaction = new Transaction();
$transaction2 = new Transaction();
$transaction3 = new Transaction();
$transaction4 = new Transaction();
$transaction5 = new Transaction();
$transaction6 = new Transaction();
$transaction7 = new Transaction();

echo Transaction::getCount();



?>
