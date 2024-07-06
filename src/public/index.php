<?php
declare(strict_types = 1);

spl_autoload_register(function($class){
    $path = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    require $path;
    echo $path;
});

use App\Formatter;

$f = Formatter::createInstance();
$f->enter(4);
echo 'Hello';
$f->enter(10);
echo 'World';
?>
