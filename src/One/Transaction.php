<?php
declare(strict_types=1);
namespace One;

const FOO = 2;

function explode($first='first', $second='second'){
    echo "$first, $second\n";
    echo 'This is custom function';
}


class Transaction
{

    public function getNamespace()
    {
        echo 'Namespace: '.__NAMESPACE__;
    }

}



?>