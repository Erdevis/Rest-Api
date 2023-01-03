<?php

use App\Http\Controllers\controllerpeople;
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


Route::get('Natkaniec/305389/people', [controllerpeople::class, 'index']);
Route::post('Natkaniec/305389/people', [controllerpeople::class, 'create']);
Route::get('Natkaniec/305389/people/{people}', [controllerpeople::class, 'read']);
Route::put('Natkaniec/305389/people/{people}', [controllerpeople::class, 'update']);
Route::delete('Natkaniec/305389/people/{people}', [controllerpeople::class, 'delete']);
 