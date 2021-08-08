<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UtilsController;
use App\Models\Feedback;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/feedback', [FeedbackController::class, 'index']);
    Route::get('/feedback/new', [FeedbackController::class, 'new']);
    Route::get('/feedback/test',[FeedbackController::class, 'test']);
    Route::get('/feedback/{feedback_id}',[FeedbackController::class,'detail']);
    Route::get('/feedback/{feedback_id}/edit',[FeedbackController::class,'edit']);
    Route::get('/roadmap',function() {
        return view('roadmap/index');
    });
    
});

