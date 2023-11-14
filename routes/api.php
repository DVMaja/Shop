<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/users', UserController::class);
Route::apiResource('/api/users', UserController::class);


Route::get('/user', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user', [UserController::class, 'update'])->name('user.update');
Route::patch('/user', [UserController::class, 'update'])->name('user.update');
Route::delete('/user', [UserController::class, 'destroy'])->name('user.destroy');
