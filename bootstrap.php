<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require __DIR__."/vendor/autoload.php";
require __DIR__.'/config/containers.php';
require __DIR__.'/config/middlewares.php';
require __DIR__.'/config/events.php';


$router = new SON\Framework\Router;

require __DIR__.'/config/routes.php';

try {
    //retorno compact('action', 'params')
    $result = $router->run();
    
    $response = new \SON\Framework\Response;

    $params = [
        'container' => $container,
        'params' => $result['params']
    ];
    
    foreach ($middlewares['before'] as $middleware) {
        $middleware($container);
    }

    $response($result['action'], $params);

    foreach ($middlewares['after'] as $middleware) {
        $middleware($container);
    }

} catch (\SON\Framework\Exceptions\HttpException $e) {

    echo json_encode(["error" => $e->getMessage()]);
    
}
