<?php
declare(strict_types=1);
class Animal
{
    private string $name;
    private int $limbs;

    public function __construct(
        string $name,
        int $limbs
    )
    {
        $this->name = $name;
        $this->limbs = $limbs;
    }
}




?>