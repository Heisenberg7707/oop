<?php

declare(strict_types=1);

namespace App;

class Singleton
{
    private static ?self $instance = null;

    public string $paid;
    public string $pedding;

    private function __construct(array $config)
    {
        $this->paid = $config[0];
        $this->pedding = $config[1];
    }

    public static function getInstance(array $config = []): self
    {
        if (self::$instance === null){
            self::$instance = new Singleton($config);
        }
        return self::$instance;
    }

    public function process():void
    {
        array_map(function(){
            echo $this->pedding;
        }, [1]);
        
    }

}
