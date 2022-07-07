<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TutorController;
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

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('signup', function () {
    return view('register');
})->name('signup');

// Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('loginaccount', [TutorController::class, 'loginaccount'])->name('loginaccount');
Route::post('signupaccount', [TutorController::class, 'signupaccount'])->name('signupaccount');

Route::group(['middleware' => 'auth'], function () {
    // Home
    Route::get('home', [SubjectController::class, 'home'])->name('home');
    Route::get('logout', [TutorController::class, 'logoutaccount'])->name('logoutaccount');

    Route::get('addsubject', [SubjectController::class, 'addsubject'])->name('addsubject');
    Route::post('addsubjectaction', [SubjectController::class, 'addsubjectaction'])->name('addsubjectaction');
});