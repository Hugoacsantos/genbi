<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();

        return view('author.home',['authors'=>$authors]);
    }

    public function register(){
        return view('author.cadastro');
    }

    public function details(string $id){
        $author = Author::find($id);

        return view('author.details',['author'=>$author]);
    }

    public function edit(Request $request, string $id){
        $author = Author::find($id);

        return view('author.editar',['author' => $author]);
    }

    public function search(Request $request, string $id){
        $authors = Author::find($id);

        return view('author.search',['authors' => $authors]);
    }

    public function update(Request $request,string $id){
        $author = Author::find($id);
        $author->name = $request->input('name');
        $author->save();


        return redirect('/author');
    }

    public function create(CreateAuthorRequest $request){
        $author = Author::create([
            'name' => $request->input('name'),
        ]);

        return redirect('/author');
    }


    public function delete(string $id){
        $author = Author::find($id);
        $author->delete();

        return redirect('/author');
    }
}
