<?php

use App\Http\Controllers\apidsController;
use App\Http\Controllers\dsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\formulaController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('users');
})->name('users');

Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/apids', [homeController::class, 'apids'])->name('apids');
Route::get('/gad', [homeController::class, 'gad'])->name('gad');
Route::get('/users', [homeController::class, 'users'])->name('users');
Route::get('/formula', [homeController::class, 'formula'])->name('formula');
Route::get('/contact', [homeController::class, 'contact'])->name('contact');

Route::post('/signup', [userController::class, 'addData']);
Route::post('/users', [userController::class, 'login'])->name('login');
Route::post('/home', [userController::class, 'homeData']);
Route::get('/home1', [userController::class, 'show'])->name('home1');

Route::get('/datasheet/{id}', [dsController::class, 'show'])->name('datasheet.show');
Route::get('/apids/{id}', [apidsController::class, 'show'])->name('apids.show');

Route::get('/print', function () {return view('print');});