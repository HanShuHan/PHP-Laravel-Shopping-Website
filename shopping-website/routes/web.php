<?php

use App\Http\Controllers\UserController;
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

//HOME/INDEX
Route::get('/', function () {
    return view('pages.index');
});

//LOGIN AND REGISTER
Route::get('/login', function() {
    return view('pages.login');
});

Route::get('/signup', function() {
    return view('pages.register');
});

Route::post('/logout', [UserController::class, 'logout']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/auth', [UserController::class, 'login']);


