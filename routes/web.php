<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

//This code statement were given during 1st implementation.
Route::get('/', function () {
    return view('welcome');
});

//These code statement were made using controllers.php
Route::get('Aboutus',[Controller::class,'aboutus']);
Route::get('Login',[Controller::class,'login']);
Route::get('Programs',[Controller::class,'programs']);
Route::get('Register',[Controller::class,'register']);

