<?php

use App\Http\Controllers\BejegyzesController;
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

Route::get('bejegyzesek', [BejegyzesController::class, 'allBejegyzes']);
Route::get('bejegyzesek/{osztaly_id}', [BejegyzesController::class, 'osztalyBejegyzes']);
Route::post('bejegyzes', [BejegyzesController::class, 'store']);