<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\userController;
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

Route::view("user","user");
Route::view("about","about");
/*
Route::get('/user{$name}', function ($name) {
    return view('users',["user"=>$name]);
});
*/

//Route::get("user",userController::class,'loadView');
//Route::get("user\{$id}",[userController::class,'show']);