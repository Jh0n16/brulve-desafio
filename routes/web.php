<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'login'])->name('login.login');
Route::post('auth/', [LoginController::class, 'auth'])->name('login.auth');
Route::get('logout/', [LoginController::class, 'logout'])->name('login.logout');
Route::get('create/', [LoginController::class, 'create'])->name('login.create');

Route::post('store/', [UserController::class, 'store'])->name('user.store');

Route::get('clientes/', [ClienteController::class, 'index'])->name('cliente.index')->middleware('auth');
Route::post('clientes/store/', [ClienteController::class, 'store'])->name('cliente.store')->middleware('auth');
Route::get('clientes/show/{cliente}', [ClienteController::class, 'show'])->name('cliente.show')->middleware('auth');
Route::get('clientes/edit/{cliente}', [ClienteController::class, 'edit'])->name('cliente.edit')->middleware('auth');
Route::put('clientes/update/{cliente}', [ClienteController::class, 'update'])->name('cliente.update')->middleware('auth');
Route::delete('clientes/destroy/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy')->middleware('auth');

Route::get('enderecos/{cliente}', [EnderecoController::class, 'index'])->name('endereco.index')->middleware('auth');
Route::post('enderecos/store/', [EnderecoController::class, 'store'])->name('endereco.store')->middleware('auth');
Route::get('enderecos/edit/{endereco}', [EnderecoController::class, 'edit'])->name('endereco.edit')->middleware('auth');
Route::put('enderecos/update/{endereco}', [EnderecoController::class, 'update'])->name('endereco.update')->middleware('auth');
Route::delete('enderecos/destroy/{endereco}', [EnderecoController::class, 'destroy'])->name('endereco.destroy')->middleware('auth');
