<?php
declare(strict_types=1);
namespace App;
class Transaction
{
    private static int $count = 0;

    public function __construct() 
    {
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}


?>