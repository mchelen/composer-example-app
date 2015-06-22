<?php

require 'vendor/autoload.php';

// this package is coming from packagist
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

// this package is coming from git
use HelloWorld\SayHello;
echo SayHello::world();

?>
