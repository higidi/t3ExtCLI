<?php

// autoloader
require_once __DIR__ . '/vendor/autoload.php';

// define environment constants
define('APP_NAME', 'T3ExtCLI');
define('APP_VERSION', '1.0.0-dev');

// create application
$app = new \Higidi\T3ExtCli\Application(APP_NAME, APP_VERSION);

// TODO do stuff here :-)

// run application
$app->run();
