<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'home']);
Route::resource("chat", ChatController::class);
Route::get("login", [LoginController::class, "get"]);
Route::post("login", [LoginController::class, "post"]);
Route::get("/chat/delete/{chat}",[ChatController::class,'destroy']);
Route::get("/login/logout",[LoginController::class, 'destroy']);

