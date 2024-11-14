<?php

use App\Http\Controllers\dsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\formulaController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/apids', [homeController::class, 'apids'])->name('apids');
Route::get('/gad', [homeController::class, 'gad'])->name('gad');
Route::get('/users', [homeController::class, 'users'])->name('users');
Route::get('/home1', [homeController::class, 'good'])->name('home1');
// Route::get('/register', [homeController::class, 'register'])->name('register');

Route::post('/users', [userController::class, 'addData']);
Route::post('/home', [userController::class, 'homeData']);
Route::get('/home1', [userController::class, 'show'])->name('home1');
Route::get('/datasheet/{id}', [dsController::class, 'show'])->name('datasheet.show');

Route::get('/formula', [homeController::class, 'formula'])->name('formula');