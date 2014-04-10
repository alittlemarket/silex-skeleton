#!/usr/bin/env php
<?php

require_once __DIR__.'/../vendor/autoload.php';

set_time_limit(0);

use Symfony\Component\Console\Input\ArgvInput;

$input = new ArgvInput();
$env = $input->getParameterOption(array('--env', '-e'), getenv('SYMFONY_ENV') ?: 'dev');


$app = new Silex\Application();

# Env mode
$app['env'] = 'dev';

require __DIR__.'/../src/app.php';
require __DIR__.'/../config/'.$env.'.php';
$console = require __DIR__.'/../src/console.php';
$console->run();