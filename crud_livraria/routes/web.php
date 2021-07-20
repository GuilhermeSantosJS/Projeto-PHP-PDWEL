<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;



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
    return view('welcome');
});

Route::get('/livros/novo', [LivrosController::class, 'create']);
Route::post('/livros/novo', [LivrosController::class, 'store']) -> name('registrar_livro');
Route::get('/livro/ver/{id}', [LivrosController::class, 'show']);
Route::get('/livro/editar/{id}', [LivrosController::class, 'edit']);
Route::post('/livro/editar/{id}', [LivrosController::class, 'update']) -> name('alterar_livro');
Route::get('/livro/excluir/{id}', [LivrosController::class,  'delete']);
Route::post('livro/excluir/{id}', [LivrosController::class, 'destroy']) -> name('excluir_livro');