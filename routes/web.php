<?php

use App\Http\Controllers\ClienteController;
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
Route::get('clientes/edit/', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('clientes/update/', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('clientes/destroy/', [ClienteController::class, 'destroy'])->name('cliente.destroy');
