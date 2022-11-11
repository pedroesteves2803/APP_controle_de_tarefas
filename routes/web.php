<?php

use App\Mail\MensagemTesteMail;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('tarefa.create');
});

Auth::routes(['verify' => true]);

Route::get('tarefa/exportacao/{extensao}', 'App\Http\Controllers\TarefaController@exportacao')
    ->name('tarefa.exportacao');

Route::get('tarefa/exportar/PDF', 'App\Http\Controllers\TarefaController@exportarPDF')
    ->name('tarefa.exportar.pdf');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController')
    ->Middleware('verified');

Route::get('mensagem-teste', function(){
    return new MensagemTesteMail();
});

