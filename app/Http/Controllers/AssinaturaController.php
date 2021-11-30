<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    public function index($tipo){
        return view('assinatura', ['tipo' => $tipo]);
    }

    public function create(Request $request){
        $user = Auth::user();
        $user->assinatura = 1;
        $user->tipo_assinatura = $request->tipo;
        $user->save();

        return redirect('/livros');
    }
}
