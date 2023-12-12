<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();

        return view('book.home',['books'=>$books]);
    }

    public function register(){
        $authors = Author::all();
        return view('book.cadastro',['authors' => $authors]);
    }

    public function details(string $id){
        $book = Book::find($id);

        return view('book.details',['book'=>$book]);
    }

    public function edit(Request $request, string $id){
        $book = Book::find($id);

        return view('book.editar',['book' => $book]);
    }

    public function search(Request $request, string $name){
        $title = $request->input('search');
        $book = Book::where('title',$title)->first();

        return view('book.search',['book' => $book]);
    }

    public function update(Request $request,string $id){
        $title = $request->input('title');
        $book = Book::find($id);

        $book->title = $title;
        $book->save();

        return redirect('/book');
    }

    public function create(Request $request){
        $book = Book::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'author_id' => $request->input('author')
        ]);

        return redirect('/book');
    }


    public function delete(string $id){
        $book = Book::find($id);
        $book->delete();

        return redirect('/book');
    }
}
