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
// Route simple para visualizar la pagina de inicio
Route::get('/', function () {
    return view('welcome');
});


/* Rutas más complejas que solo se mostraran si un usuario ha iniciado sesión*/
// If logged in => go to dashboard

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Verificar email
Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

// Route para servicios
Route::get('/services', function () {
    return view('services');
})->middleware(['auth'])->name('services');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';

