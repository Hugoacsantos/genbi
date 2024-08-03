<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use App\Services\UserServices;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users = User::all();

        return view('user.home',['users'=>$users]);
    }

    public function register(){
        return view('user.cadastro');
    }

    public function details(string $id){
        $UserServices = new UserServices();
        $user = $UserServices->findById($id);
        return view('user.details',['user'=>$user]);
    }

    public function edit(string $id){
        $UserServices = new UserServices();
        $user = $UserServices->findById($id);

        return view('user.editar',['user' => $user]);
    }

    public function search(Request $request){
        $cpf = $request->input('busca');
        $UserServices = new UserServices();
        $user = $UserServices->findByCpf($cpf);
        return view('user.search',['users' => $user]);
    }

    public function update(Request $request,string $id){
        $data = $request->only(['name','email']);
        $UserServices = new UserServices();
        $UserServices->update(date:$data,id:$id);

        return redirect('/user');
    }

    public function create(CreateUserRequest $request){
        $UserServices = new UserServices();
        $UserServices->create($request->toArray());
        return redirect('/user');
    }


    public function delete(string $id){
        $user = User::find($id);
        $user->delete();

        return redirect('/user');
    }

}
