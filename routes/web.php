<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EnderecoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes/', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('clientes/create/', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('clientes/store/', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('clientes/show/{cliente}', [ClienteController::class, 'show'])->name('cliente.show');
Route::get('clientes/edit/{cliente}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('clientes/update/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('clientes/destroy/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::get('ederecos/', [EnderecoController::class, 'index'])->name('endereco.index');
Route::post('endereco/store/', [EnderecoController::class, 'store'])->name('endereco.store');
Route::get('endereco/show/{cliente}', [EnderecoController::class, 'show'])->name('endereco.show');
Route::get('endereco/edit/{cliente}', [EnderecoController::class, 'edit'])->name('endereco.edit');
Route::put('endereco/update/{cliente}', [EnderecoController::class, 'update'])->name('endereco.update');
Route::delete('endereco/destroy/{cliente}', [EnderecoController::class, 'destroy'])->name('endereco.destroy');
