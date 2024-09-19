<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/teste', 'tela-teste');
Route::view('/cadastro', 'tela-cadastro');

Route::post('/salva-usuario',
function (Request $request) {
    $user = new User();
    $user->name = $request->nome;
    $user->email = $request->email;
    $user->password = $request->senha;
    $user->save();

    return "Salvo com sucesso!";
}
)->name('SalvaUsuario');
