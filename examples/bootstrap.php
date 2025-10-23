<?php

use CreditGuard\CreditGuard;
use Dotenv\Dotenv;

require(__DIR__ . '/../vendor/autoload.php');

$dotenv = Dotenv::createImmutable(__DIR__)->load();

// you get this parameters from CreditGuard

$cg_url         = $_ENV['CG_RELAY_URL'];
$cg_user        = $_ENV['CG_USERNAME'];
$cg_password    = $_ENV['CG_PASSWORD'];
$cg_terminal_id = $_ENV['CG_TERMINAL_NUMBER'];
$cg_mid         = $_ENV['CG_MPI_MID'];

// for return from cg hosted page
$baseurl = $_ENV['PAYMENT_PAGE_SUCCESS_REDIRECT_URL'] ?? 'http://example.com/success';

$cg = new CreditGuard($cg_url, $cg_user, $cg_password, $cg_terminal_id, $cg_mid);