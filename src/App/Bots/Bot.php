<?php

declare(strict_types=1);

namespace App\Bots;

use App\Users\User;

class Bot
{
    public function __construct(private User $user, string $name)
    {
        $this->user->__construct($name);
    }

    public function getProperties()
    {
        $this->user->getProperties();
    }
}
