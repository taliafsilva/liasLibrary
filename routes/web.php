<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\PrecoController;
use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\UsuarioController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

//ROUTES
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/precos', [PrecoController::class, 'index'])->name('precos.index');

//NEED AUTH
Route::get('/livros', [LivroController::class, 'index'])->middleware(['auth'])->name('livros.index');
Route::get('/assinatura/{tipo}', [AssinaturaController::class, 'index'])->middleware(['auth'])->name('assinatura.index');
Route::post('/assinar', [AssinaturaController::class, 'create'])->middleware(['auth'])->name('assinatura.store');

//ADMIN
Route::get('/admin/dashboard', [HomeController::class, 'adminIndex'])->middleware(['auth', 'admin'])->name('dashboard');
Route::get('/admin/usuarios', [UsuarioController::class, 'list'])->middleware(['auth', 'admin'])->name('usuarios.list');
Route::put('/admin/usuarios/{id}', [UsuarioController::class, 'update'])->middleware(['auth', 'admin'])->name('usuarios.update');
Route::get('/admin/livros', [LivroController::class, 'list'])->middleware(['auth', 'admin'])->name('livros.list');
Route::get('/admin/livros/create', [LivroController::class, 'create'])->middleware(['auth', 'admin'])->name('livros.create');
Route::post('/admin/livros', [LivroController::class, 'store'])->middleware(['auth', 'admin'])->name('livros.store');
Route::get('/admin/livros/{id}', [LivroController::class, 'show'])->middleware(['auth', 'admin'])->name('livros.show');
Route::put('/admin/livros/{id}', [LivroController::class, 'update'])->middleware(['auth', 'admin'])->name('livros.update');
Route::delete('/admin/livros/{id}', [LivroController::class, 'destroy'])->middleware(['auth', 'admin'])->name('livros.destroy');

require __DIR__.'/auth.php';
