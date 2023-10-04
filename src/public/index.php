<?php
declare(strict_types = 1);

use App\Bots\Bot;
use App\Users\Admin;
use App\Users\Moderator;
use App\Users\Petux;
use App\Users\User;

require __DIR__.'/../vendor/autoload.php';

function br(int $n): void{
    for($i=0; $i<$n; $i++){
        echo '</br>';
    }
}

$petux = new Petux('Petux');
$moder = new Moderator('Moder');
$user = new User('User');
$bot = new Bot($user, 'Bot');
$user->getProperties();
$admin = new Admin('Admin');
$admin->getProperties();
br(3);
$admin->showMessage('Hello world');
br(3);
$user->showMessage('Hello from user');
br(3);
$moder->showMessage('Hello from moderator');
br(3);
$petux->adminGreetings();
br(1);
$admin->adminGreetings();
br(2);
$bot->getProperties();
?>
