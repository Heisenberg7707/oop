<?php
declare(strict_types = 1);

use App\Fields\Checkbox;
use App\Fields\Radio;
use App\Fields\Text;
use App\Formatter;

require __DIR__.'/../vendor/autoload.php';

$f = Formatter::createInstance();

$fields = [
    new Text('textField'),
    new Checkbox('checkboxField'),
    new Radio('radioField')
];
foreach($fields as $field){
    if(get_class($field)==='App\Fields\Text'){
        echo $field->render('hello world');
    }else{
    echo $field->render();
    }
    $f->enter(1);
}




?>
