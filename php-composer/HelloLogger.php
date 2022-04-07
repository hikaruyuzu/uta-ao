<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$log = new Logger("Hikaru");
$log->pushHandler(new StreamHandler('application.log', Logger::INFO));

$log->info("hello from loger");
$log->info("run applocation monolog");
