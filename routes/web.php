<?php

use App\Http\Controllers\blog_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
route::view('/dummy','dummy');
route::view('/add_post','add_post');
route::post('/add',[blog_controller::class,'add']);
route::get('/display',[blog_controller::class,'display'])->name('display');
route::get('/detail/{id}',[blog_controller::class,'detail']);

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
route::get('/userid)',[CustomAuthController::class,'registerUser']);

route::view('new_registration','new_registration');
route::get('/delete',[blog_controller::class,'delete']);
route::delete('/delete1',[blog_controller::class,'delete1']);
route::get('/logout',[CustomAuthController::class,'logout']);