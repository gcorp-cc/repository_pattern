<?php


namespace App\Repository\UserRepository;


use App\Models\User;

class EloUserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }
}
