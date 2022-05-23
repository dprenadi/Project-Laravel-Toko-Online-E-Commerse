<?php

use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/register/check', [RegisterController::class, 'check'])->name('api-register-check');
Route::get('/provinces', [LocationController::class, 'provinces'])->name('api-provinces');
// Route::get('/provincies', [LocationController::class, 'provincies'])->name('api-provincies');
Route::get('/regencies/{provinces_id}', [LocationController::class, 'regencies'])->name('api-regencies');

Route::GET('/city/{province_id}', [LocationController::class, 'City'])->name('api-city');
Route::GET('/city_id/{city_id}', [LocationController::class, 'City_ID'])->name('api-city_id');
Route::post('/rajaongkir/checkOngkir', [LocationController::class, 'checkOngkir'])->name('api-checkOngkir');
