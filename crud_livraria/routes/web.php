<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;


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
Route::get('/forgot-password', [ForgotPasswordController::class, 'getEmail']) -> name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'postEmail']);
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'getPassword']) -> name('reset.password.get');
Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword']) -> name('reset.password.post');