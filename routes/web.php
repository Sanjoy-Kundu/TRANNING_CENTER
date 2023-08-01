<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\OurpartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuccessStudentController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserController;
use App\Models\SuccessStudent;
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
Route::get('course/details/{id}', [FrontendController::class, 'course_details'])->name('course.details');




Route::get('/dashboard', [BackendController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/user/list', [UserController::class, 'index'])->name('user.list');
Route::get('user/add', [UserController::class, "create"])->name('user.add');
Route::post('user/store', [UserController::class, 'store'])->name('user.store');
Route::post('user/delete', [UserController::class, 'user_multiple_deter'])->name('user.delete');
Route::get('user/all/post/list', [UserController::class, 'all_course_post_list'])->name('user.all.post.list');
Route::get('user/pending/post/list', [UserController::class, 'pending_list'])->name('user.pending.post.list');
Route::get('user/approve/post/list', [UserController::class, 'approve_list'])->name('user.approve.post.list');
//notice
Route::get('user/notice/all', [UserController::class, 'all_notice'])->name('user.notice.all');
Route::get('user/notice/pending', [UserController::class, 'pending_notice'])->name('user.notice.pending');
Route::get('user/notice/approve', [UserController::class, 'approve_notice'])->name('user.notice.approve');




Route::get('/category', [CategoryController::class, 'create'])->name('category');
Route::get('category/list', [CategoryController::class, 'index'])->name('category.list');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/view/{id}', [CategoryController::class, 'show'])->name('category.view');
Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');



Route::get('/course/list',[CourseController::class, 'index'])->name('course.list');
Route::get('/course', [CourseController::class, 'create'])->name('course'); //show form
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/view/{id}', [CourseController::class, 'show'])->name('course.view');
Route::get('course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::post('course/update/{id}', [CourseController::class, 'update'])->name('course.update');
Route::get('course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
Route::get('course/restore/{id}', [CourseController::class, 'restore'])->name('course.restore');
Route::get('course/permanent/delete/{id}', [CourseController::class, 'permanent_delete'])->name('course.permanent.delete');
Route::get('course/approve/form/{id}', [CourseController::class, 'approve_form'])->name('course.approve.form');
Route::post('course/approve/store/{id}', [CourseController::class, 'approve_store'])->name('course.approve.store');
Route::get('course/approve/pending/form/{id}', [CourseController::class, 'pending_form'])->name('course.approve.pending.form');
Route::post('course/approve/pending/store/{id}', [CourseController::class, 'pending_store'])->name('course.approve.pending.store');
Route::get('course/pending/reject/form/{id}', [CourseController::class, 'reject_course'])->name('course.pending.reject.form');
Route::post('course/pending/reject/store/{id}', [CourseController::class, 'reject_store'])->name('course.pending.reject.store');
Route::get('course/approve/view/{id}', [CourseController::class, 'approve_post_view'])->name('course.approve.view');
Route::get('course/pending/post/view/{id}', [CourseController::class, 'pending_post_view'])->name('course.pending.post.view');



Route::get('/trainer', [TrainerController::class, 'create'])->name('trainer');
Route::post('trainer/store', [TrainerController::class, 'store'])->name('trainer.store');
Route::get('trainer/list', [TrainerController::class, 'index'])->name('trainer.list');
Route::get('trainer/view/{id}', [TrainerController::class, 'show'])->name('trainer.view');
Route::get('trainer/edit/{id}', [TrainerController::class, 'edit'])->name('trainer.edit');
Route::post('trainer/update/{id}', [TrainerController::class, 'update'])->name('trainer.update');


Route::get('/success/student', [SuccessStudentController::class, 'create'])->name("success.student");
Route::post('success/student/store', [SuccessStudentController::class, 'store'])->name('success.student.store');
Route::get('success/student/list', [SuccessStudentController::class, 'index'])->name('success.student.list');
Route::get('student/view/{id}', [SuccessStudentController::class, 'show'])->name('student.view');



Route::get('partner/form', [OurpartnerController::class, 'create'])->name('partner.form');
Route::post('partner/store', [OurpartnerController::class, 'store'])->name('partner.store');
Route::get('partner/list', [OurpartnerController::class, 'index'])->name('partner.list');
Route::get('partner/view/{id}', [OurpartnerController::class, 'show'])->name('partner.view');


//:::::::::notice list show ::::::::::::::::::::
Route::get('notice/all', [NoticeController::class, 'index'])->name('notice.all');
Route::get('notice/approve/list',[NoticeController::class, 'approve_notice_list'])->name('notice.approve.list');
Route::get('notice/pending/list',[NoticeController::class, 'pending_notice_list'])->name('notice.pending.list');
Route::get('notice/reject/list',[NoticeController::class, 'reject_notice_list'])->name('notice.reject.list');
//:::::::::notice list show ::::::::::::::::::::
Route::get('notice/form', [NoticeController::class, 'create'])->name('notice.form');
Route::post('notice/store', [NoticeController::class, 'store'])->name('notice.store');
Route::get('notice/show/{id}', [NoticeController::class, 'show'])->name('notice.show');
Route::post('notice/update/{id}', [NoticeController::class, 'notice_update']);
Route::get('notice/view/{id}', [NoticeController::class, 'notice_view'])->name('notice.view');
Route::get('notice/delete/{id}', [NoticeController::class, 'notice_delete'])->name('notice.delete');



//::::::::::::::admin user access user->notice ::::::::::::::::::::::
Route::get('notice/approve/{id}',[NoticeController::class, 'notice_approve_form'])->name('notice.approve');
Route::post('notice/approve/store/{id}', [NoticeController::class, 'notice_approve_store'])->name('notice.approve.store');
Route::get('notice/reject/{id}', [NoticeController::class, 'notice_reject_form'])->name('notice.reject');
Route::post('notice/reject/store/{id}', [NoticeController::class, 'notice_reject_store'])->name('notice.reject.store');
//::::::::::::::admin user access user->notice ::::::::::::::::::::::




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
