<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuario extends Controller
{
    public function cadastrar(){
        // dd(Hash::make('123'), md5('123'), sha1('123'));
        return view('usuario.cadastro');
    }

    public function salvar(Request $request){
        dd($request->all());
    }
}
