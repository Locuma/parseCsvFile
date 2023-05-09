<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->all('/', function() {
    $test = new \app\Controllers\MainController();
    echo $test->index();
});
$router->all('/all', function (){
    $test = new \app\Controllers\MainController();
    echo $test->allGoods();
});

$router->run();