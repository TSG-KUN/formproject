<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

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

Route::prefix('')->name('.')->middleware('guest')->group(function () {
    Route::get('/login', function() {
        return view('authentication.login');
    })->name('login');
    Route::get('/register', function() {
        return view('authentication.register');
    })->name('register');
});

Route::get('/login', [LoginController::class, 'login']) -> middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegistrationController::class, 'register']) -> middleware('guest');
Route::post('/register', [RegistrationController::class, 'store']);

Route::get('/form', function() {
    return view('form.form');
})->name('form');
