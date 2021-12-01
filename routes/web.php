<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\login;
use App\Http\Controllers\profile;
use App\Http\Controllers\register;
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

//login
Route::get('/login',[login::class,'index'])->name('login');
Route::post('/login',[login::class,'post']);


//register
Route::get('/register',[register::class,'index'])->name('register');
Route::post('/register',[register::class,'post']);


//Dashboard
Route::get('/dashboard',[dashboard::class,'index'])->name('dashboard');
Route::post('/dashboard',[dashboard::class, 'post']);

//Profile Page
Route::get('/profile',[profile::class,'index'])->name('profile');
Route::post('/profile',[profile::class,'post']);
