<?php

declare(strict_types=1);

namespace App\Users;

class User
{
    public string $name;
    private string $id = '1231231';
    protected string $permission;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->permission = 'regular';
    }
    final public function getProperties():void
    {
        echo 'Name - '.$this->name.'</br>';
        echo 'ID - '.$this->id.'</br>';
        echo 'Permission - '.$this->permission.'</br>';
    }
    public function showMessage(string $message): void
    {
        echo $message;
    }
}
