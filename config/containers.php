<?php

use Pimple\Container;

$container = new Container();

$container['db'] = function(){
    
    $cdn = 'mysql:host=172.19.0.2;dbname=db_gerenciador';
    $user = 'root';
    $password = 'root';
    $options = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    $pdo = new \PDO($cdn, $user, $password, $options);

    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    return $pdo;
};