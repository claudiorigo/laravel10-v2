<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('portafolio', ProjectController::class)->names('projects')->parameters(['portafolio' => 'project']);

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('messages.store');

Auth::routes(['register' => true]);



