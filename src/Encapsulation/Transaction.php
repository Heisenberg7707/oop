<?php

declare(strict_types=1);

namespace Encapsulation;

class Transaction
{
    private $id;
    private $name;

    public function __construct()
    {
        $this->id = 12345;
        $this->name = 'Slim Shady';
    }
    
    private function myNameIs()
    {
        return 'My name is - '.$this->name;
    }

    private function sendEmail()
    {
        echo 'Email has been sent</br>';
    }
    private function generateCode()
    {
        echo 'code generated</br>';
    }
    public function process()
    {
        $this->sendEmail();
        $this->generateCode();
    }


}
