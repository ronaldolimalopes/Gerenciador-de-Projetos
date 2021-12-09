<?php

require __DIR__."/vendor/autoload.php";

$router = new SON\Framework\Router;

// $router->add("GET", "/", function(){
//     echo "Estamos na homePage";
// });

$router->add("GET","/project/(\d+)", function(){
    echo "Estamos na Home Project: ";
});

try {
    $router->run();
} catch (\SON\Framework\Exceptions\HttpException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
