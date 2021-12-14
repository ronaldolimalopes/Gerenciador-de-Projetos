<?php

// $router->add("GET", "/user/(\d+)", function($params){
//   return (new \App\Controller\UserController)->show($params);
// });
$router->add("GET", "/user/(\d+)", '\App\Controller\UserController::show');

$router->add("GET","/project/(\d+)", function() use($container){
    $pdo = $container['db'];
    echo "Estamos na Home Project";
});