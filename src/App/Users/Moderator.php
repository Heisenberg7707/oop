<?php

declare(strict_types=1);

namespace App\Users;

class Moderator extends User
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->permission = 'moderator';
    }
}

?>