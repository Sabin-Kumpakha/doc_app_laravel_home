<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;


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

//this is the endpoint with prefix /api
// Route::post('/login', [UsersController::class, 'login']);
Route::any('/login', [UsersController::class, 'login']);
Route::any('/register', [UsersController::class, 'register']);

//this group returns data only if the user is authenticated successfully using sanctum
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UsersController::class, 'index']);

});

    // Route::get('/posts', [PostsController::class, 'index']);
    // Route::post('/posts', [PostsController::class, 'store']);
    // Route::get('/posts/{id}', [PostsController::class, 'show']);
    // Route::put('/posts/{id}', [PostsController::class, 'update']);
    // Route::delete('/posts/{id}', [PostsController::class, 'destroy']);
    // Route::post('/logout', [UsersController::class, 'logout']);