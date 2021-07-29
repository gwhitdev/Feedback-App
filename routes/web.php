<?php

use App\Http\Controllers\FeedbackController;
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

Route::get('/feedback', [FeedbackController::class, 'index'])->middleware('auth');
Route::get('/feedback/new', [FeedbackController::class, 'new'])->middleware('auth');
Route::get('/feedback/test',[FeedbackController::class, 'test'])->middleware('auth');
Route::get('/feedback/{feedback_id}',[FeedbackController::class,'detail'])->middleware('auth');

