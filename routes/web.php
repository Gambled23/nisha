<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Models\Pedido;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('cliente', ClienteController::class)->middleware('auth'); #el middleware auth es para que solo se pueda acceder a la ruta si se esta logueado
Route::resource('productos', ProductoController::class)->middleware('auth');
Route::resource('pedido', PedidoController::class)->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
