<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/', [EventController::class, 'index']);

// Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/event/new', [EventController::class, 'create'])->name('event.create');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');
Route::post('/event', [EventController::class, 'store'])->name('event.store');
// Route::get('/event', [EventController::class, 'index'])->name('event.index');
// Route::get('/event/new', [EventController::class, 'create'])->name('event.create');
// Route::post('/event', [EventController::class, 'store'])->name('event.store');
// Route::get('/user', UserController::class);
// Route::get('/location', LocationController::class);

Route::resource('/event', EventController::class);
Route::resource('/location', LocationController::class);
Route::resource('/user', UserController::class);

Route::get('/allevents', function(){
    return view('all-events');
})->name('allevents');