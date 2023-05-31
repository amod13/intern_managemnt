<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogoutController;



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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('intern', [App\Http\Controllers\TestController::class, 'getstudent'])->name('intern.getstudent');
Route::post('intern', [App\Http\Controllers\TestController::class, 'poststudent'])->name('intern.poststudent');
Route::get('intern', [App\Http\Controllers\TestController::class, 'getTable'])->name('intern.getTable');
Route::get('intern', [App\Http\Controllers\TestController::class, 'getstudent'])->name('intern.getstudent');

Route::get('answer', [App\Http\Controllers\TestController::class, 'getanswer'])->name('intern.getanswer');
Route::post('answer', [App\Http\Controllers\TestController::class, 'postanswer'])->name('intern.postanswer');






Route::get('/signout', 'Auth\LoginController@signout')->name('Sign out');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
