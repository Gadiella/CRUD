<?php

namespace App\Repositories;

use App\Interfaces\AuthenticationInterface;
use Illuminate\Support\Facades\Auth;

class AuthenticationRepository implements AuthenticationInterface
{
    public function login($data)
    {
        return Auth::attempt($data);
    }

}
