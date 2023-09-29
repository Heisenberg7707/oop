<?php

declare(strict_types=1);

namespace Encapsulation;

class Response
{
    private ?int $code = null;

    public function __construct()
    {

    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $number): self
    {
        if(100<$number && $number<600){
            $this->code = $number;
            echo $this->getCode();
        }else{
            echo 'Ты пидорас';
        }
        return $this;
    }
}

?>