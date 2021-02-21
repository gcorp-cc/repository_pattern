<?php

namespace App\Repository\UserRepository;

interface UserRepositoryInterface
{
    public function all();
    public function show($id);
}
