<?php

declare(strict_types=1);

namespace App\Fields;

class Text extends Field
{
    public function render(string $text=''): string
    {
        return <<<HTML
        <input type="text" name="{$this->name}" placeholder="{$text}"/>
        HTML;
    }
}
