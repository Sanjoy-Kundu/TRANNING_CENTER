<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuccessStudentController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [FrontendController::class, 'index']);

Route::get('/dashboard', [BackendController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/course', [CourseController::class, 'create'])->name('course'); //show form
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');


Route::get('/trainer', [TrainerController::class, 'create'])->name('trainer');
Route::post('trainer/store', [TrainerController::class, 'store'])->name('trainer.store');


Route::get('/success/student', [SuccessStudentController::class, 'create'])->name("success.student");
Route::post('success/student/store', [SuccessStudentController::class, 'store'])->name('success.student.store');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
