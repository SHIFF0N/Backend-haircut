<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {});

Route::resource('/barbers', BarbersController::class);
Route::resource('/custormer',CustormerController ::class);
Route::resource('/manu', ManuController::class);
Route::resource('/registration', RegistrationController::class);

