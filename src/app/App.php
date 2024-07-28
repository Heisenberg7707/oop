<?php
declare(strict_types = 1);

function get_transactions(string $path) : array
{
    $transactions = [];
    if(($handle = fopen($path , 'r')) !== FALSE){
        while(($transaction = fgetcsv($handle)) !== FALSE){
            if($transaction[0] == 'Date'){
                continue;
            }
            $transaction[0] = formate_date($transaction[0]);
            $transactions[] = $transaction;
        }
    }
    fclose($handle);
    return $transactions;
};

function get_totals(array $transactions): array
{
    $totals = [
        'income' => 0,
        'expense' => 0,
        'total' => 0
    ];

    foreach($transactions as $transaction){
        $amount = formate_number($transaction[3]);
        $totals['total'] += $amount;
        if($amount < 0){
            $totals['expense'] += $amount;
        } else{
            $totals['income'] += $amount;
        }

    }

    return $totals;
}
?>