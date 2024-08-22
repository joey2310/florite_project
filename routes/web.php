<?php

use App\Http\Controllers\dsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/ds', [homeController::class, 'ds'])->name('ds');
Route::get('/apids', [homeController::class, 'apids'])->name('apids');
Route::get('/gad', [homeController::class, 'gad'])->name('gad');
Route::get('/users', [homeController::class, 'users'])->name('users');

Route::post('/users', [userController::class, 'addData']);
Route::post('/home', [userController::class, 'homeData']);
Route::get('/list', [userController::class, 'show'])->name('list');

Route::get('/datasheet/{id}', [dsController::class, 'show'])->name('datasheet.show');
