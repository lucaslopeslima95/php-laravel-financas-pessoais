<?php

namespace App\Service;

use App\Repository\UserRepository;
use App\Models\User;

class UserService{

    public static function createUser(User $user){
        return UserRepository::createUser($user);
    }
}
