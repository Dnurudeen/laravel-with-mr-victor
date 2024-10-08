<?php

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
    return view('welcome');
});

Route::get('/about-us', function(){
    return view('about');
});
Route::get('/contact-us', function(){
    return view('contact');
});
Route::get('/forbidden', function () {
    return view('forbidden');
})->name('forbidden');


// END

Auth::routes();

Route::middleware(['auth', 'log.user'])->group(function () {
    // Routes that require email verification
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard/view-profile', [App\Http\Controllers\HomeController::class, 'userprofile']);
    Route::get('/dashboard/edit-profile', [App\Http\Controllers\HomeController::class, 'editprofile']);
    Route::put('/dashboard/edit-profile', [App\Http\Controllers\HomeController::class, 'update'])->name('update-profile');
});

Route::middleware(['auth', 'log.admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'admin']);
});
