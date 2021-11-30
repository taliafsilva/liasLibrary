<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index(){
        $user = Auth::user();
        if($user->assinatura == true){
            $livros = Book::get();
            return view('livros', ['livros' => $livros]);
        }
        return redirect('precos');              
    }

    public function list(){
        $livros = Book::get();

        return view('livros.list', ['livros' => $livros]);
    }

    public function create(){
        return view('livros.create');
    }

    public function store(Request $request){
        $livro = new Book();
        $livro->nome = $request->nome;
        $livro->descricao = $request->descricao;
        $livro->img = $request->img;
        $livro->url = $request->url;
        $livro->save();

        return redirect()->route('livros.list');
    }

    public function show($id){
        $livro = Book::find($id);

        return view('livros.show', ['livro' => $livro]);
    }

    public function update(Request $request, $id){
        $livro = Book::find($id);
        $livro->nome = $request->nome;
        $livro->descricao = $request->descricao;
        $livro->img = $request->img;
        $livro->url = $request->url;
        $livro->save();

        return redirect()->route('livros.list');
    }

    public function destroy($id){
        $livro = Book::find($id);
        $livro->delete();

        return redirect()->route('livros.list');
    }
}
