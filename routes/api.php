<?php

use App\Http\Controllers\Strategy\DuckController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Repository\UserController;

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

Route::prefix('strategy/ducks')->group(function () {
    Route::get('rubber', [DuckController::class, 'rubberDuck']);
    Route::get('mallard', [DuckController::class, 'mallardDuck']);
    Route::get('redHead', [DuckController::class, 'redHeadDuck']);
    Route::get('decoy', [DuckController::class, 'decoyDuck']);
});
