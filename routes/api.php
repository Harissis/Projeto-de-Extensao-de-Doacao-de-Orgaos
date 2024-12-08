<?php

use App\Http\Controllers\{
    AuthController,
    FlavorController,
    UserController
};
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/cadastrar', [UserController::class, 'store']);

//Regra autenticar e autorizar os acessos
Route::middleware('auth:api')->group(function () {
    Route::post('/logout',[AuthController::class, 'logout']);

    Route::prefix('/user')->group(function (){
        Route::get('/', [UserController::class, 'me']);
        Route::put('/atualizar/{id}', [UserController::class, 'update']);
        Route::get('/visualizar/{id}', [UserController::class, 'show']);
    });

    
});
