<?php
declare(strict_types = 1);

use App\Example;
use Encapsulation\Response;

require __DIR__.'/../vendor/autoload.php';

$example = new Example;


$response = new Response();
var_dump($response->getCode());
$response->setCode(560);


?>
