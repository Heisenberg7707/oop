<?php
declare(strict_types = 1);
#require_once '../One/Transaction.php';
require_once '../Two/Transaction.php';
require_once '../Notification/Email.php';
require_once '../One/CustomProfile.php';

spl_autoload_register(function($class){
    $path = __DIR__.'/../'.str_replace('\\', '/', $class).'.php';
    require_once $path;
    echo "--0-$path-0--";
});

use \One\CustomProfile;
use \One\Transaction;
use \Two\Transaction as SecondTransaction;
$transaction2 = new SecondTransaction;
$transaction = new Transaction;
$customer = new CustomProfile;
var_dump($transaction);
var_dump($transaction2);
var_dump($customer);


?>
