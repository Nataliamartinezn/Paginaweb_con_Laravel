<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactoController;

use App\Mail\AvisoContacto;
use Illuminate\Support\Facades\Mail;

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


Auth::routes();

//Rutas disponibles al iniciar sesión 
Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('/categorias', CategoriaController::class);
    Route::get('/listproduct', [ProductController::class, 'listproduct'])->name('listadoproductos');
});

//Ruta eliminar 
Route::delete('product/{product}',[ProductController::class,'destroy'])->name('product.destroy');


//rutas diponible sin iniciar sesion 
Route::resource('/product', ProductController::class);

Route::get('contacto', [ContactoController::class,'index'])->name('contacto.index');//Rutas contactanos
Route::post('contacto', [ContactoController::class,'store'])->name('contacto.store');//Rutas contactanos

Route::get('/', [ProductController::class,'home']);//Rutas contactanos
Route::get('/home', [ProductController::class,'home']);