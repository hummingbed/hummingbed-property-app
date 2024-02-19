<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


//create and generate Oauth endpoint
Route::prefix('0auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('register', 'register');
        Route::post('login', 'login');
    });
});


Route::middleware('auth:api')->group(function () {
    // Define your authenticated routes here
    Route::prefix('user')->group(function () {
        Route::get('/data', [UserController::class, 'getUsers']);
    });
});
