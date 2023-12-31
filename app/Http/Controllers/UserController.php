<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
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
        $user = User::find($id);

        return view('user.details',['user'=>$user]);
    }

    public function edit(string $id){
        $user = User::find($id);

        return view('user.editar',['user' => $user]);
    }

    public function search(Request $request){
        $cpf = $request->input('busca');
        $user = User::where('cpf',$cpf)->first();

        if(empty($cpf)){
            return redirect('/user');
        }


        return view('user.search',['users' => $user]);
    }

    public function update(Request $request,string $id){
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect('/user');
    }

    public function create(CreateUserRequest $request){

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf')
        ]);

        return redirect('/user');
    }


    public function delete(string $id){
        $user = User::find($id);
        $user->delete();

        return redirect('/user');
    }

}
