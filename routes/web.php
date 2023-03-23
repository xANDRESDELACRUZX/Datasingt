<?php

use App\Http\Controllers\CitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('layouts.index');
});

Route::get("login", [UserController::class, "index"])->name('login');
Route::post("login", [UserController::class, "store2"]);
Route::get("register", [UserController::class, "create"]);
Route::post("register", [UserController::class, "store"]);
Route::get("logout", [UserController::class, "logout"]);

Route::group(['middleware' => 'auth'], function () {
Route::get('pagePrincipal', function () {
    return view('layouts.dashboard-admin');
});
Route::get("UserList", [UserController::class, "index2"]);
Route::get("usuarios/Editar/{id}", [UserController::class, "show"]);
Route::post("update/{id}", [UserController::class, "update"]);
Route::get("profile/{id}", [UserController::class, "edit"]);
Route::get("profile/getciudades/{id}", [UserController::class, "ciudades"]);
Route::get("security/{id}", [UserController::class, "security"]);
Route::post("ResetPassword/{id}", [UserController::class, "ResetPassword"]);
Route::post("update2/{id}", [UserController::class, "update2"]);
Route::get("delete/{id}", [UserController::class, "destroy"]);

Route::get("Citas", [CitasController::class, "index"]);
});




