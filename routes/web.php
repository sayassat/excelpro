<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('main');

// Route::get('/home/videos', [VideoController::class, 'index'])->name('video.index');

Route::prefix('home')->middleware(['onlyAdmin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/videos', [VideoController::class, 'index'])->name('video.index');
    Route::get('/videos/create', [VideoController::class, 'create'])->name('video.create');
    Route::post('/videos', [VideoController::class, 'store'])->name('video.store');
    Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('video.edit');
    Route::patch('/videos/{video}', [VideoController::class, 'update'])->name('video.update');
    Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->name('video.delete');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/video/{filename}', [VideoController::class, 'stream'])->middleware('auth')->name('video.stream');

Route::get('/video/demo', [VideoController::class, 'demo'])->name('video.demo');