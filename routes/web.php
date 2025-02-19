<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/form', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home/list', [App\Http\Controllers\HomeController::class, 'list'])->name('list');
    Route::post('/home', [App\Http\Controllers\HomeController::class, "save"])->name('save');
    Route::get('/home/{car}', [App\Http\Controllers\HomeController::class, "edit"])->name('edit');
    Route::put('/home/{car}', [App\Http\Controllers\HomeController::class, "update"])->name('update');
    Route::get('/home/delete/{car}', [App\Http\Controllers\HomeController::class, "delete"])->name('delete');
});



// Route to redirect to Google's OAuth page
Route::get('api/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.google.redirect');

// Route to handle the callback from Google
Route::get('api/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('auth.google.callback');