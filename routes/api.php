<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultZipCodeController;
use App\Http\Controllers\ConsultDistanceAndValueController;

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

Route::get('/', function () {
    return response()->json(['status' => 'API is working!']);
});

Route::post('/zip', [ConsultZipCodeController::class, 'index']);

Route::post('/distance-value', [ConsultDistanceAndValueController::class, 'index']);