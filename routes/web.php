<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/{user}', 'App\Http\Controllers\DashboardController@index')->middleware(['auth', 'verified'])->name('dashboard.show');

Route::get('/p/create', 'App\Http\Controllers\PostController@create');

Route::post('/p', 'App\Http\Controllers\PostController@store');


require __DIR__.'/auth.php';
