<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TestUserController;

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

    Route::get('/questions', [QuestionController::class, 'index'])->name('question.index');
    Route::get('/questions/create/{test}', [QuestionController::class, 'create'])->name('question.create');
    Route::post('/questions', [QuestionController::class, 'store'])->name('question.store');
    Route::get('/questions/{question}/edit', [QuestionController::class, 'edit'])->name('question.edit');
    Route::patch('/questions/{question}', [QuestionController::class, 'update'])->name('question.update');
    Route::delete('/questions/{question}', [QuestionController::class, 'destroy'])->name('question.delete');

    Route::get('/profiles', [ProfileController::class, 'index'])->name('profile.index');
});

Route::get('/video/{filename}', [VideoController::class, 'stream'])->middleware('auth')->name('video.stream');

Route::get('/video/demo', [VideoController::class, 'demo'])->name('video.demo');

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user', [UserController::class, 'update'])->name('user.update');

    Route::get('/certificates/{certificate}', [CertificateController::class, 'show'])->name('certificate.show');
});

Auth::routes();

Route::get('/questions/{test}', [QuizController::class, 'index'])->name('quiz.index');

Route::post('/test-user/store', [TestUserController::class, 'store'])->name('test_user.store');
