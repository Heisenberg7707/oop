<?php
declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', $root . 'views' . DIRECTORY_SEPARATOR);
define('FILE_PATH', $root . 'files' . DIRECTORY_SEPARATOR);

require APP_PATH . 'Helpers.php';
require APP_PATH . 'App.php';

$file_path = FILE_PATH . 'sample_1.csv';

$transactions = get_transactions($file_path);

$totals = get_totals($transactions);



require VIEW_PATH . 'transaction.php';
?>
