<?php
namespace App\Controller;

use App\Models\User;

class UserController
{
    public function show($container, $params)
    {
        $user = new User($container);
        var_dump($user->get($params[1]));
        //echo "Estamos na homePage";
    }
}