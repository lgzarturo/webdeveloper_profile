<?php

declare(strict_types=1);

require_once('vendor/autoload.php');

session_start();

use Profile\Helpers;

$is_production = $_ENV['IS_PRODUCTION'] ?? false;

$lang = $_ENV['LANGUAGE'] ?? 'es';

$param_lang = $_GET['lang'] ?? null;

error_reporting($is_production ? 0 : E_ALL);

ini_set('display_startup_errors', $is_production ? 'Off' : 'On');

ini_set('display_errors', $is_production ? 'Off' : 'On');

$random = 0;

try {
    $random = substr(hash('sha256', openssl_random_pseudo_bytes(20)), -random_int(1, 100));
    $_SESSION['csrf_token'] = $random;
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    die();
}

require_once __DIR__ . '/data.php';

if (isset($param_lang)) {
    $lang = $param_lang;
} else if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}

$_SESSION['lang'] = Helpers::sanitize_lang($lang);

$translations = $data_translations[$lang];
