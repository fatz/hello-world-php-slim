<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->get('/', function () {
    echo "<h1>Hello world v1</h1>";
});
$app->get('/health', function () {
    echo "ALIVE";
});
$app->run();
