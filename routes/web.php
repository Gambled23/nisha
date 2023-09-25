<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DescripcionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('producto/pdf', ProductoController::class, 'pdf')->name('producto.pdf'); renombrar rutas de forma manual
Route::resource('cliente', ClienteController::class);
Route::resource('productos', ProductoController::class);