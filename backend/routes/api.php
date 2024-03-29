<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
    Route::post('/logout', 'logout');
    Route::post('/refresh', 'refresh');
});

Route::controller(UserController::class)->group(function () {
    Route::post('/users/{user}/add_photo', 'add_photo');
    Route::post('/update', 'update');
    Route::post('/users', 'users');
    Route::post('/filter_by_age', 'filter_by_age');
    Route::post('/search', 'search');
    Route::post('/refresh', 'refresh');
    Route::post('/add_to_favorites', 'add_to_favorites');
    Route::post('/add_to_blocks', 'add_to_blocks');
    Route::post('/age', 'age');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
