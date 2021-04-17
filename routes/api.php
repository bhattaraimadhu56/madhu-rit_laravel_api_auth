<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Public routes no need to register and use token
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/items', [ItemController::class, 'showAll']);
Route::get('/', [ItemController::class, 'showAll']);
Route::get('/items/{id}', [ItemController::class, 'getById']);
Route::get('/items/search/{name}', [ItemController::class, 'searchByName']);

// Protected routes (need token)
// which means without signup/signin don't have access to this routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/signout', [AuthController::class, 'signout']);
    Route::post('/items', [ItemController::class, 'store']);
    Route::put('/items/{id}', [ItemController::class, 'update']);
    Route::delete('/items/{id}', [ItemController::class, 'destroy']);
    

});