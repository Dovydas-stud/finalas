<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])
    ->name('dashboard');

Route::get('/feedback', [FeedbackController::class, 'index'])
    ->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])
    ->name('feedback');

Route::get('/atsiliepimai', [FeedbackController::class, 'list'])
    ->name('fb_list');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // For authenticated pages
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

// })->name('dashboard');
