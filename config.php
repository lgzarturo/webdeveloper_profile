<?php

session_start();

$random = 0;

try {
    $random = substr(hash('sha256', openssl_random_pseudo_bytes(20)),-random_int(1, 100));
    $_SESSION['csrf_token'] = $random;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    die();
}

$is_production = $_ENV['IS_PRODUCTION'] ?? false;
$lang = $_ENV['LANG'] ?? 'es';
$param_lang = $_GET['lang'] ?? null;
require_once __DIR__ . '/data.php';

if (isset($param_lang)) {
    $lang = $param_lang;
    if ($lang !== 'es' && $lang !== 'en') {
        $lang = 'es';
    }
    $_SESSION['lang'] = $lang;
} else if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $_SESSION['lang'] = $lang;
}

$translations = $data_translations[$lang];
