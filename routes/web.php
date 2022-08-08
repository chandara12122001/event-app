<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\AllEvents;
use App\Http\Livewire\EventInfoIncrement;
use App\Http\Livewire\MapLocation;
use App\Http\Livewire\UploadProfile;
use Illuminate\Support\Facades\Auth;
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
Route::get('/event/new', [EventController::class, 'create'])->middleware('auth')->name('event.create');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');
Route::get('/verify/{id}', [RegisterController::class, 'showVerify']);
Route::post('/event', [EventController::class, 'store'])->name('event.store');
Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit')->middleware('auth');
Route::put('/event/{id}', [EventController::class, 'update'])->name('event.update');
Route::post('/verify/{id}', [RegisterController::class, 'verify']);
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
Route::get('/map', MapLocation::class);

Route::get('/forget-password', [ResetPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.show');
Route::post('/forget-password',[ResetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.show');
Route::post('/reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/increments', EventInfoIncrement::class);
Route::get('/uploadProfile', UploadProfile::class);
Route::get('/user/uploadProfile', [UserController::class, 'showCreateProfile'])->name('create.profile.show')->middleware('auth');
Route::post('/user/uploadProfile', [UserController::class, 'createProfile'])->name('create.profile.post')->middleware('auth');

Route::get('/user/editProfile', [UserController::class, 'showEditProfile'])->name('edit.profile.show')->middleware('auth');
Route::put('/user/editProfile', [UserController::class, 'editProfile'])->name('edit.profile.post')->middleware('auth');

Route::resource('/event', EventController::class);
Route::resource('/location', LocationController::class);
Route::resource('/user', UserController::class);



// Route::get('/allevents', function(){
//     return view('all-events');
// })->name('allevents');
// Auth::routes(['verify=>true']);

Route::get('show', function(){
    return view('event.show');
});

// Route::get('/allevents', [EventController::class, 'index'])->name('allevents');
Route::get('/allevents', AllEvents::class)->name('allevents');

Route::get('/userprofile', UploadProfile::class);

Route::get('/verify', function(){
    return view('auth.verify');
});