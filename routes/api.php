<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApiController;

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

Route::get("data", [dummyApiController::class, 'getData']);

Route::get("lists", [DeviceController::class, 'lists']);

Route::get("lists/{id?}", [DeviceController::class, 'listId']);

Route::post("device/add", [DeviceController::class, 'add']);

Route::post("device/update/{id}", [DeviceController::class, 'update']);

Route::delete("device/delete/{id}", [DeviceController::class, 'delete']);

Route::get("device/search/{search}", [DeviceController::class, 'search']);
