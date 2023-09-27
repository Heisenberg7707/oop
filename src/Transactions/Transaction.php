<?php
declare(strict_types=1);
namespace Transactions;

use Transactions\Status\Status;

class Transaction
{

    private string $status;

    public function __construct() 
    {
        $this->setStatus(Status::PAID);
    }

    public function setStatus(string $status):self
    {
        if(array_key_exists($status, Status::ALL_STATUSES)){
            $this->status = Status::ALL_STATUSES[$status];
        }

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

}


?>