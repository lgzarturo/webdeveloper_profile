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
