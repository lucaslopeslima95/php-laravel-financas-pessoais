<?php
namespace App\Service;

use App\Models\User;
use \Laravel\Socialite\Facades\Socialite;

class UserService
{

    public static function updateOrCreate(array $user): User
    {
        dd($user);
        return new User();
    }


}
