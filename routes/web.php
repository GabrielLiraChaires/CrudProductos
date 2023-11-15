<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\MuroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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
    return view('dashboard');
})->name('Dashboard');

// Route::get('/productos', function () {
//     return view('Productos.index');
// })->name('ProductosIndex');

//Mostrar productos.
Route::get('/productos',[ProductosController::class,'index'])->name('ProductosIndex');

//Para crear o agregar productos.
Route::get('/productos/create',[ProductosController::class,'create'])->name('ProductosCreate');

//Request para la base de datos.
Route::post('/productos',[ProductosController::class,'store'])->name('ProductosStore');

//Editar productos.
Route::get('/productos/{producto}/edit',[ProductosController::class,'edit'])->name('ProductosEdit');

//Actualizar productos.
Route::patch('/productos/{producto}',[ProductosController::class,'update'])->name('ProductosUpdate');

//Borrar productos.
Route::delete('/productos/{producto}',[ProductosController::class,'destroy'])->name('ProductosDestroy');

//Registro
Route::get('/registro',[RegistroController::class,'index'])->name('RegistroIndex');

Route::post('/registro',[RegistroController::class,'store'])->name('RegistroStore');

Route::get('/muro',[MuroController::class,'index'])->name('MuroIndex');

//Logins
Route::get('/login',[LoginController::class,'index'])->name('LoginIndex');

Route::post('/login',[LoginController::class,'store'])->name('LoginStore');

//Logout
Route::post('/logout',[LogoutController::class,'store'])->name('LogoutStore');