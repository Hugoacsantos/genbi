<?php

namespace App\Services;

use App\Models\User;

class UserServices
{
    public function create(array $data): bool{

        $user = User::create($data);

        return true;
    }

    public function findById(int $id):mixed {
        $user = User::find($id);

        return $user;
    }

    public function findByCpf(int $cpf):mixed {
        $user = User::where('cpf',$cpf)->first();

        if(empty($cpf)){
            return false;
        }
        return $user;
    }

    public function update(array $date,string $id):true {
        $user = User::find($id);
        $user->name = $date['name'];
        $user->email = $date['email'];
        $user->save();

        return true;
    }
}
