<?php

$middlewares = [
    'before' => [
        function ($c){
            echo "Foi chamado uma middlewares before";
        }
    ],
    'after' => [
        function ($c){
            echo "Foi chamado uma middlewares after";
        }
    ]
];