<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Error;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('status','open')->get();
        // dd($orders);
        // $orders = new Order();
        // $orders->active();
        return view('order.home',['orders'=>$orders]);
    }

    public function register(string $id){
        $book = Book::find($id);


        return view('order.cadastro',['book'=>$book]);
    }

    public function details(string $id){
        $order = Order::find($id);

        return view('order.details',['order'=>$order]);
    }

    public function edit(Request $request, string $id){
        $order = Order::find($id);

        return view('order.editar',['order' => $order]);
    }

    public function search(Request $request, string $id){
        $orders = Order::find($id);

        return view('order.search',['orders' => $orders]);
    }

    public function update(Request $request,string $id){
        $order = Order::find($id);
        $order->status = 'fechado';
        $order->save();
        $book = Book::findOrFail($order->book_id);
        $book->giveBack();

        return redirect('/order');
    }

    public function create(Request $request){
        $user = User::where('cpf',$request->input('cpf'))->first();
        $book = Book::findOrFail($request->input('book_id'));
        if($book->status == 'Alugado') {
            return throw new Error('Ja alugado');
        }
        $book->rent();

        $order = Order::create([
            'user_id' => $user->id,
            'book_id' => $request->input('book_id'),
        ]);

        return redirect('/order');
    }


    public function delete(string $id){
        $order = Order::find($id);
        $order->delete();

        return redirect('/order');
    }
}
