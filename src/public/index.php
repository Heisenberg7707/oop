<?php
declare(strict_types = 1);
require __DIR__.'/../vendor/autoload.php';

use Transactions\Status\Status;
use Transactions\Transaction;
use Transactions\Zalupa;

$transaction = new Transaction();
echo $transaction->setStatus(Status::DECLINED)->getStatus();


?>
