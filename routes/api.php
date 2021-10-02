<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
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

// When trying to access a secured API, login first, get your token and use it in the postman header
Route::post("login", [UserController::class, 'index']);

Route::group(['middleware' => 'auth:sanctum'], static function(){

    //All secure URL's
    Route::apiResource('member', MemberController::class);
    Route::get("data", [dummyApiController::class, 'getData']);
    Route::get("lists", [DeviceController::class, 'lists']);
    Route::get("lists/{id?}", [DeviceController::class, 'listId']);
    Route::post("device/add", [DeviceController::class, 'add']);
    Route::post("device/update/{id}", [DeviceController::class, 'update']);
    Route::delete("device/delete/{id}", [DeviceController::class, 'delete']);
    Route::get("device/search/{search}", [DeviceController::class, 'search']);

});

Route::post('upload', [\App\Http\Controllers\FileController::class, 'upload']);


