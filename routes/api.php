<?php

use App\Http\Controllers\MessageController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// messages
Route::post('/message/add', [MessageController::class, 'addMessage']);
Route::get('/messages/all', [MessageController::class, 'allMessages']);

Route::post('/meter/balance/callback', [MeterController::class, 'balanceCallBack']);
Route::post('/meter/power/callback', [MeterController::class, 'powerCallBack']);