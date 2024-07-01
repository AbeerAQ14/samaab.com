<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Artisan;
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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('landing');

Route::get('clear',function (){
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::controller(App\Http\Controllers\Admin\DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });
    Route::controller(\App\Http\Controllers\Admin\UserController::class)->prefix('users')->name('user.')->group(function () {
       Route::get('/', 'index')->name('index');
       Route::get('create', 'create')->name('create');
       Route::post('store', 'store')->name('store');
       Route::get('edit/{id}', 'edit')->name('edit');
       Route::post('update/{id}', 'update')->name('update');
       Route::delete('destroy', 'destroy')->name('destroy');
    });
});
