<?php
namespace App\Controller;

use App\Models\User;

class UserController
{
    private $container;
    
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function show($id)
    {
        $user = new User($this->container);
        var_dump($user->get($id));
        echo "Estamos na homePage";
    }
}