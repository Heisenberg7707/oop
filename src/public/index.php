<?php
declare(strict_types = 1);
require_once __DIR__.'/../One/Transaction.php';
require_once __DIR__.'/../Two/Transaction.php';
require_once __DIR__.'/../Notification/Email.php';
require_once __DIR__.'/../One/CustomProfile.php';

#use One\{Transaction, CustomProfile};
use One as First;
use Two\Transaction as TwoTransaction;


$custom_profile = new First\CustomProfile;
echo '</br>';
$transaction1 = new First\Transaction;
echo '</br>';
$transaction2 = new TwoTransaction;
echo '</br>';
$transaction1->getNamespace();
echo '</br>';
$transaction2->getNamespace(); 



?>
