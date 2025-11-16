<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CertificateController;

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

    Route::get('/tests', [TestController::class, 'index'])->name('test.index');
    Route::get('/tests/create', [TestController::class, 'create'])->name('test.create');
    Route::post('/tests', [TestController::class, 'store'])->name('test.store');
    Route::get('/tests/{test}', [TestController::class, 'show'])->name('test.show');
    Route::get('/tests/{test}/edit', [TestController::class, 'edit'])->name('test.edit');
    Route::patch('/tests/{test}', [TestController::class, 'update'])->name('test.update');
    Route::delete('/tests/{test}', [TestController::class, 'destroy'])->name('test.delete');

    Route::get('/profiles', [ProfileController::class, 'index'])->name('profile.index');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/video/{filename}', [VideoController::class, 'stream'])->middleware('auth')->name('video.stream');

Route::get('/video/demo', [VideoController::class, 'demo'])->name('video.demo');

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user', [UserController::class, 'update'])->name('user.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/certificates/{certificate}', [CertificateController::class, 'show'])->name('certificate.show');
});