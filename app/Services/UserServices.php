<?php

namespace App\Services;

use App\Models\User;

class UserServices
{
    public function create(array $data): bool{

        $user = User::create($data);

        return true;
    }
}
