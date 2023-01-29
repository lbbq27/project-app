<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;

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
//Route::get('/',[PageController::class,'layout']);

Route::get('/',[PageController::class,'Home']);
Route::get('/quienes-somos',[PageController::class,'QuienesSomos']);
Route::get('/contacto',[PageController::class,'Contacto']);   

//CRUD -- CUT RESOURCES UPDATE DELETE  //ABM --  ALTA BAJA MODIFICACION // PARA MANEJO DE BASE DE DATOS

Route::get('/productos',[ProductoController::class,'index'])->name('productos.index');
Route::get('/productos/create',[ProductoController::class,'create'])->name('productos.create');

//Para enviar los datos cargados en el formulario se usa el metodo post y a la ruta principal
//pero en el store

Route::post('/productos', [ProductoController::class,'store'])->name('productos.store');