<?php
declare(strict_types = 1);

use App\Formatter;

require __DIR__.'/../vendor/autoload.php';

$f = Formatter::createInstance();

echo 'Hello';
$f->enter(4);
echo 'world';




?>
