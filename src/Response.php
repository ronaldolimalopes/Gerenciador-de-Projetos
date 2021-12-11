<?php
namespace SON\Framework;

class Response
{
    public function __invoke($action, $params)
    {
        return $action($params);
    }
}