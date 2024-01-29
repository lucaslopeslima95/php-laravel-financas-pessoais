<?php

namespace App\Repository;

use App\Models\User;

class UserRepository implements UserRepository{

    public static function createUser(User $user){
        $user_new = new User();
        $user_new->name     = $user->name;
        $user_new->email    = $user->email;
        $user_new->password = bcrypt($user->password);
        $user->save();
        return http_response_code(200);
    }
}
