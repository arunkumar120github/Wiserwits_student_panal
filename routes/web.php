<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, StudentProfileController, AuthController};

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard',[UserController::class, 'dashboard'])->name('dashboard');
    Route::get('profile',[StudentProfileController::class, 'edit'])->name('profile');
    Route::get('courses',[UserController::class, 'courses'])->name('courses');
    Route::post('/student/profile/image-upload',[StudentProfileController::class, 'uploadImage'])->name('student.profile.image.upload');
    Route::post('/student/profile', [StudentProfileController::class, 'update'])->name('student.profile.update');
});