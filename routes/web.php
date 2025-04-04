<?php

use App\Http\Controllers\AluguelController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocadorController;
use App\Http\Controllers\UserController;
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

Route::get('/teste', function(){
    return view('viewCar');
})->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/products/{id}', [HomeController::class, 'product'])->name('product');


Auth::routes();



Route::middleware(['auth', 'can:create,App\Models\Car'])->group(function () {
    Route::get('/car/form', [App\Http\Controllers\CarCntroller::class, 'create'])->name('create.car');
    Route::post('/car', [App\Http\Controllers\CarCntroller::class, "storage"])->name('storage.car');
    Route::get('/car/list', [App\Http\Controllers\CarCntroller::class, 'list'])->name('list.car');
    Route::get('/car/{car}', [App\Http\Controllers\CarCntroller::class, "edit"])->name('edit.car');
});

Route::middleware(['auth', 'can:update,car',
                            'can:delete,car',])->group(function () {
    Route::put('/car/{car}', [App\Http\Controllers\CarCntroller::class, "update"])->name('update.car');
    Route::get('/car/destroy/{car}', [App\Http\Controllers\CarCntroller::class, "destroy"])->name('destroy.car');

});

Route::get('/cliente/create', [ClienteController::class, "create"])->name('cliente.create');


Route::middleware(['auth'])->group(function () {
    Route::get('/cliente/list', [ClienteController::class, "list"])->name('cliente.list');
    Route::post('/cliente', [ClienteController::class, "storage"])->name('cliente.storage');
    Route::get('/cliente/{cliente}', [ClienteController::class, "edit"])->name('cliente.edit');
    Route::put("/cliente/{cliente}", [ClienteController::class, "update"])->name('cliente.update');
    Route::delete('/cliente/{cliente}', [ClienteController::class, "destroy"])->name('clienete.destroy');
    Route::get('/cliente/alugados',  [ClienteController::class, 'alugados'])->name('car.alugados');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/locador/create/',  [LocadorController::class, 'create'])->name('locador.create');
    Route::get('/locador/list', [LocadorController::class, "list"])->name('locador.list');
    Route::post('/locador', [LocadorController::class, "storage"])->name('locador.storage');
    Route::get('/locador/{locador}', [LocadorController::class, "edit"])->name('locador.edit');
    Route::put("/locador/{locador}", [LocadorController::class, "update"])->name('locador.update');
    Route::delete('/locador/{locador}', [LocadorController::class, "destroy"])->name('locador.destroy');
    Route::get('/locador', [LocadorController::class, "geral"])->name('locador.geral');
});


Route::post('/aluguel',  [AluguelController::class, 'store'])->name('aluguel.store');

Route::middleware(['auth'])->group(function () {
    
});


Route::get('/n/alugados',  [ClienteController::class, 'alugados'])->name('car.alugados');

Route::get('api/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('auth.google.redirect');


Route::get(
    'api/auth/google/callback',
    [GoogleAuthController::class, 'callback']

)->name('auth.google.callback');