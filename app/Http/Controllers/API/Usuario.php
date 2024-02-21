<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Model\Usuario as ModelUsuario;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function salvar(Request $request){
        if(ModelUsuario::cadastrar($request)){
            return response("ok", 201);
        }else{
            return response("erro", 409);
        };
    }
}
