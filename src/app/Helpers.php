<?php 
declare(strict_types = 1);
function formate_date(string $date): string
{
    return date('M j, Y', strtotime($date));
}

function formate_number(string $amount): float
{
    $amount = (float) str_replace(['$', ','], '', $amount);
    return $amount;
}

?>