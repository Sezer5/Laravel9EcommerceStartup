<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

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

// 1- do something in route

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/', function () {
    return view('welcome');
});

// 2- Call something route

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

// 3- Call controller function

Route::get('/welcome', function () {
    return view('welcome');
});

// 4- Route->Controller->View

Route::get('/test', [HomeController::class,'test'])->name('test');

// 5- Route with parameter

Route::get('/param/{id}', [HomeController::class,'param'])->name('param');

// 5- Route with parameter

Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name('param');

// 6- Save Parameter

Route::post('/save', [HomeController::class,'save'])->name('save');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
