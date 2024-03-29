<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Model\Usuario as ModelUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuario extends Controller
{
    public function cadastrar(){
        // dd(Hash::make('123'), md5('123'), sha1('123'));
        return view('usuario.cadastro');
    }

    public function salvar(Request $request){
        $request->validate([
            "nome" => "required",
            "email" => "required|email",
            "senha" => "required|min:5",
        ]);


        if(ModelUsuario::cadastrar($request)){
            return view('usuario.sucesso', [
                "fulano" => $request->input('nome')
            ]);
        } else{
            echo "Falha ao cadastrar!";
        }

    }
}
