<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Livewire\FollowUser;
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

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@example')->name('dashboard');

Route::get('/dashboard/{user}', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('dashboard.show');

Route::get('/dashboard/{user}/edit', 'App\Http\Controllers\DashboardController@edit')->name('dashboard.edit');

Route::patch('/dashboard/{user}', 'App\Http\Controllers\DashboardController@update')->name('dashboard.update');

Route::get('/p/create', 'App\Http\Controllers\PostController@create');

Route::post('/p', 'App\Http\Controllers\PostController@store');

Route::get('/p/{post}', 'App\Http\Controllers\PostController@show');

Route::get('/follow-user/{user}', FollowUser::class);


require __DIR__.'/auth.php';
