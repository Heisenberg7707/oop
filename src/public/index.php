<?php
declare(strict_types = 1);

use App\Singleton;
use App\Transaction;

require __DIR__.'/../vendor/autoload.php';

$transaction = Singleton::getInstance(['paid', 'pedding']);
$transaction->process();

?>
