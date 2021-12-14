<?php
namespace App\Controller;

use App\Models\User;

class UserController
{
    public function show($container, $request)
    {
        $user = new User($container);
        
        return $user->create(['name' => 'Ronaldo Lopes events']);
       // return $user->get($request->attributes->get(1));
        
    }
}