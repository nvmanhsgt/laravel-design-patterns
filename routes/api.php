<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Repository\UserController;
use App\Http\Controllers\Repository\DeveloperController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('repository/users', UserController:: class);
Route::prefix('factory/developers')->group(function () {
    Route::get('developer', [DeveloperController::class, 'developer']);
    Route::get('sgt', [DeveloperController::class, 'developerSgt']);
    Route::get('osaka', [DeveloperController::class, 'developerOsaka']);
    Route::get('hn', [DeveloperController::class, 'developerHn']);
});
