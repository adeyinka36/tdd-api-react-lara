<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group( function () {
    Route::resource('/post', PostController::class);
    Route::resource('/user', UserController::class)->except(['create', 'store', 'show']);
});



Route::prefix('/user')->group(function () {
    Route::post('/', [UserController::class, 'store']);
    Route::post('/login', [UserController::class, 'show']);
    Route::get('/register', [UserController::class, 'create']);
});

