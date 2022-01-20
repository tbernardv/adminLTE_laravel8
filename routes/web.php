<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    
    //Cuando lleguemos a la raiz de nuestro proyecto nos envíe a la vista de autenticación de JestStream
    return view('auth.login');
});

/*# Original que viene con JetStream cuando nos autenticamos o logueamos
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

# Rutas para nuestro ejemplo. El redireccionamiento se debe realizar con contoladores, se hizo así por el ejemplo practico que se esta haciendo.
Route::get('/dash/crud', function(){
    return view('crud.index');
});

Route::get('/dash/crud/create', function(){
    return view('crud.create');
});
