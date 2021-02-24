<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactoController;



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

Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('contacto', ContactoController::class);


//Rutas disponibles al iniciar sesión 
Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('/categorias', CategoriaController::class);
    Route::resource('/product', ProductController::class);
}); 

Route::get('send-mail', function () {
   
    $$detallecontacto = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('nata9955@hotmail.com')->send(new \App\Mail\AvisoContacto($detallecontacto));
   
    dd("Email is Sent.");
}); 
