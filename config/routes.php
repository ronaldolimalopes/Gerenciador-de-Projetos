<?php



$router->add("GET", "/user/(\d+)", function($params) use($container){
  return (new \App\Controller\UserController($container))->show($params[1]);
});

$router->add("GET","/project/(\d+)", function() use($container){
    $pdo = $container['db'];
    echo "Estamos na Home Project";
});