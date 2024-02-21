<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrokersController;



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

    Route::prefix('broker')->group(function () {
        Route::get('/brokers', [BrokersController::class, 'getAllBrokers']);
        Route::post('/save-broker', [BrokersController::class, 'addBroker']);
        Route::get('/{id}/broker', [BrokersController::class, 'getBrokerUsingBrokerId']);
    });
});
