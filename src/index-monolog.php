<?php


use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('info');
$log->pushHandler(new StreamHandler(dirname(__FILE__) .'../src/log.txt', Level::Warning));

// add records to the log
$log->warning('System Malfunction!');
$log->error('System Critical, initiating self-destruct mode!');