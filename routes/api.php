<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrokersController;

Route::get('/brokers', [BrokersController::class, 'getAllBrokers']);


//create and generate Oauth endpoint
Route::prefix('oauth')->group(function () {
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
