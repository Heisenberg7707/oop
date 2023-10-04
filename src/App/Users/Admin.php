<?php

declare(strict_types=1);

namespace App\Users;

class Admin extends User
{

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->permission = 'super';
    }

    public function showMessage(string $message): void
    {
        parent::showMessage($message);
        echo '</br>'.'P.S. administrator - '.$this->name;
    }
    public function adminGreetings():void
    {
        echo 'I am admin '.$this->name;
    }
}
