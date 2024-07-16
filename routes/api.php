<?php

use App\Models\About;
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

Route::post('/order', [App\Http\Controllers\OrderController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/about', function (){
    return About::all();
});
Route::get('/slides', [App\Http\Controllers\Api\SlideController::class, 'index']);
Route::get('/slides/{id}', [App\Http\Controllers\Api\SlideController::class, 'show']);
Route::get('/employee', [App\Http\Controllers\Api\EmployeeController::class, 'index']);
Route::get('/news', [App\Http\Controllers\Api\TreatmentsController::class, 'index']);
Route::get('/news/{id}', [App\Http\Controllers\Api\TreatmentsController::class, 'show']);
Route::get('/typetreatments', [App\Http\Controllers\Api\TypeTreatmentsController::class, 'index']);
Route::get('/typetreatments/{slug}', [App\Http\Controllers\Api\TypeTreatmentsController::class, 'show']);
Route::get('/imageslide', [App\Http\Controllers\Api\ImageSlideController::class, 'index']);
Route::get('/feedback', [App\Http\Controllers\Api\FeedbackController::class, 'index']); 