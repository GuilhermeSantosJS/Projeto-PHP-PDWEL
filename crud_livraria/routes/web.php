<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\CustomAuthController;


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/livro/ver', [LivrosController::class, 'show']);
Route::get('/dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/login', [CustomAuthController::class, 'index']) -> name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin']) -> name('login.custom'); 
Route::get('/registration', [CustomAuthController::class, 'registration']) -> name('register-user');
Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration']) -> name('register.custom'); 
Route::get('/signout', [CustomAuthController::class, 'signOut']) -> name('signout');
Route::get('/livros/novo', [LivrosController::class, 'create']);
Route::post('/livros/novo', [LivrosController::class, 'store']) -> name('registrar_livro');
Route::get('/livros/editar/{id}', [LivrosController::class, 'edit']);
Route::post('/livros/editar/{id}', [LivrosController::class, 'update']) -> name('alterar_livro');
Route::delete('/livro/ver/{id}', [LivrosController::class, 'destroy']);