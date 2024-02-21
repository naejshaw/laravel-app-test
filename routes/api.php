<?php

use Illuminate\Support\Facades\Route;
use App\Models\Model\Usuario;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::prefix('v1')->group(function(){
    Route::get('lista', function(){
        return Usuario::listar(10);
    });

    Route::post('cadastrar', "API\Usuario@salvar");
});

// Route::prefix('v2')->group(function(){
//     Route::get('lista', function(){
//         return ["a", "b", "c", "d", "e", "f"];
//     });

//     Route::post('cadastrar', function(){
//         echo 'implementar';
//     });
// });
