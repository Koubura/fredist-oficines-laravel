<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
    "users" => \App\Http\Controllers\API\UserController::class,
    "calendars" => \App\Http\Controllers\CalendarController::class,
    "roles" => \App\Http\Controllers\API\RoleController::class,
    "tasks" => \App\Http\Controllers\API\TaskController::class,
    "auth" => \App\Http\Controllers\API\AuthController::class,
]);
