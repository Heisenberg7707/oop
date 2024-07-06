<?php

declare(strict_types=1);

namespace App;

class Formatter
{

    private static ?Formatter $instance = null;

    public static function createInstance():static
    {
        if (static::$instance === null)
        {
            static::$instance = new static;
        }
        return static::$instance;
    }

    public function enter(int $quantity):void
    {
        for($i=0; $i<$quantity; $i++)
        {
            if($i>0){
                echo '.....';
            }
            echo '</br>';
        }
    }
}

?>