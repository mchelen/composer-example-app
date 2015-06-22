<?php

require 'vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');
$log->addWarning('Bar');


use HelloWorld\SayHello;

echo SayHello::world();

?>
