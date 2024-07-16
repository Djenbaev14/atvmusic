<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LocalizationConroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// lang
Route::get('/lang/{lang}',[LocalizationConroller::class,'setlang'])->name('local');

Route::get('/', [FrontendController::class, 'index'])->name('frontend-home');
Route::get('/news', [FrontendController::class, 'news'])->name('frontend-news');
Route::get('/news/{slug}', [FrontendController::class, 'showNews'])->name('frontend-show-news');
Route::get('/tvshows', [FrontendController::class, 'tvshows'])->name('frontend-tvshows');
Route::get('/tvshows/{slug}', [FrontendController::class, 'showTvshows'])->name('frontend-show-tvshows');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend-about');

Route::group(['prefix'=>'admin','middleware' => ['auth:sanctum']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/slides', App\Http\Controllers\SlideController::class);
    Route::resource('/employees', App\Http\Controllers\EmployeeController::class);
    Route::resource('/treatments', App\Http\Controllers\TreatmentsController::class);
    Route::resource('/typetreatments', App\Http\Controllers\TypeTreatmentsController::class);
    Route::resource('/feedback', App\Http\Controllers\FeedbackController::class);
    Route::resource('/imageslide', App\Http\Controllers\ImageSlideController::class);
    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
    Route::post('/about', [App\Http\Controllers\AboutController::class, 'update']);
    Route::resource('/order', App\Http\Controllers\OrderController::class);
    Route::get('/zeroorder', [App\Http\Controllers\OrderController::class, 'zeroindex'])->name('zeroindex');
});

Auth::routes();
