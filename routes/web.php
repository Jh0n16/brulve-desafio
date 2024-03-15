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
Route::post('clientes/store/', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('clientes/show/{cliente}', [ClienteController::class, 'show'])->name('cliente.show');
Route::get('clientes/edit/{cliente}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('clientes/update/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('clientes/destroy/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::get('enderecos/{cliente}', [EnderecoController::class, 'index'])->name('endereco.index');
Route::post('enderecos/store/', [EnderecoController::class, 'store'])->name('endereco.store');
Route::get('enderecos/edit/{endereco}', [EnderecoController::class, 'edit'])->name('endereco.edit');
Route::put('enderecos/update/{endereco}', [EnderecoController::class, 'update'])->name('endereco.update');
Route::delete('enderecos/destroy/{endereco}', [EnderecoController::class, 'destroy'])->name('endereco.destroy');
