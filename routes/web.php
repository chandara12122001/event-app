<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
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
Route::delete('/image/{id}', [ImageController::class, 'delete'])->middleware('auth');
Route::get('/event/new', [EventController::class, 'create'])->name('event.create')->middleware('auth');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');
Route::post('/event', [EventController::class, 'store'])->name('event.store');
Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit')->middleware('auth');
Route::put('/event/{id}', [EventController::class, 'update'])->name('event.update');
// Route::get('/event/new', [EventController::class, 'create'])->name('event.create');
// Route::post('/event', [EventController::class, 'store'])->name('event.store');
// Route::get('/user', UserController::class);
// Route::get('/location', LocationController::class);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//google login
Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);


//facebook login
Route::get('/login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');



Route::resource('/event', EventController::class);
Route::resource('/location', LocationController::class);
Route::resource('/user', UserController::class);



// Route::get('/allevents', function(){
//     return view('all-events');
// })->name('allevents');

Route::get('show', function(){
    return view('event.show');
});

Route::get('/allevents', [EventController::class, 'index'])->name('allevents');

Route::get('/userprofile', function(){
    return view('user.user');
});