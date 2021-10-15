<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UtilsController;
use App\Models\Feedback;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Models\Image;

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

Route::get('/', '/feedback');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $images = Image::all();
    return view('dashboard',compact('images'));
})->name('dashboard');

Route::get('/feedback', [FeedbackController::class, 'index']);

Route::middleware(['auth:sanctum','verified'])->group(function () {

    Route::get('/feedback/new', [FeedbackController::class, 'new']);
    Route::get('/feedback/test',[FeedbackController::class, 'test']);
    Route::get('/feedback/{feedback_id}',[FeedbackController::class,'detail']);
    Route::get('/feedback/{feedback_id}/edit',[FeedbackController::class,'edit']);
    Route::get('/roadmap',function() {
        return view('roadmap/index');
    });
    Route::post('/upload/image',[FileController::class, 'uploadImage']);
    Route::get('/upload/image',[FileController::class, 'upload']);
    Route::get('/clear', function() {

        $exitCode = Artisan::call('config:cache');
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('view:clear');
        $exitCode = Artisan::call('route:clear');
        $exitCode = Artisan::call('clear-compiled');
        return 'DONE';
      });

});

