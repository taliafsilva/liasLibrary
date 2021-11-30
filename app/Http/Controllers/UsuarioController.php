<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function list(){
        $users = User::where('role', '<>', 'admin')->get();
        return view('usuarios.list', ['users' => $users]);
    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->assinatura = !$user->assinatura;
        $user->save();
        return redirect()->route('usuarios.index');
    }
}
