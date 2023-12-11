<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function edit(Request $request, string $id){
        $user = User::find($id);

        return view('user.editar',['user' => $user]);
    }

    public function search(Request $request, string $name){
        $cpf = $request->input('search');
        $user = User::where('cpf',$cpf)->first();

        return view('user.search',['users' => $user]);
    }

    public function update(Request $request,string $id){
        $name = $request->input('name');
        $user = User::find($id);

        $user->name = $name;
        $user->save();

        return redirect('/user');
    }

    public function create(Request $request){
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
