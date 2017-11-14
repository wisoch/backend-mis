<?php

use Zend\Mvc\Application;

$GLOBALS = include getenv('GLOBAL_CONFIG_FILE');

chdir(dirname(__DIR__));

include 'vendor/autoload.php';
$config = require 'config/application.config.php';

Application::init($config)->run();
