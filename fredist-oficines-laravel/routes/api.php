<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

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

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('changePassword', [AuthController::class, 'changePassword']);
});

Route::apiResources([
    "users" => \App\Http\Controllers\API\UserController::class,
    "calendars" => \App\Http\Controllers\CalendarController::class,
    "roles" => \App\Http\Controllers\API\RoleController::class,
    "tasks" => \App\Http\Controllers\API\TaskController::class,
    "auth" => \App\Http\Controllers\API\AuthController::class,
]);

Route::post('user-task/{idUser}/{idTask}', [\App\Http\Controllers\API\UserController::class, 'addUserTaskValue']);
