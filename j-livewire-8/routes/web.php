<?php

use Illuminate\Support\Facades\Route;
//colocar el controlador a utilizar
use App\Http\Controllers\PageController;

//optener del controlador PageController el metodo home
Route::get('/', [PageController::class,'home'])->name('home');
//cuando se vaya a curso optener metodo course del controlador
//en español lo que vera el usuario
// especificando que elemento utilizar{{ }}
Route::get('curso/{course:slug}', [PageController::class,'course'])->name('course');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
