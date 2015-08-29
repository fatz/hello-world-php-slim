<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->get('/', function () {
    echo "<h1>Hello world v2</h1>";
    echo "<h2>Shipps more awesomeness</h2>";
    echo "<h3>With an <em>awesome</em> subtitle</h3>";
});
$app->get('/health', function () {
    echo "ALIVE";
});
$app->run();
