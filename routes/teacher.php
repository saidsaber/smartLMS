<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\LoginController;
use App\Http\Controllers\Teacher\ModuleController;
use App\Http\Controllers\Teacher\CoursesController;
use App\Http\Controllers\Teacher\LectureController;

Route::get('login', function () {
    return view('teacher.login');
})->name('teacher.login');

Route::post('login', LoginController::class)->name('teacher.login.post');

Route::middleware('isTeacher')->group(function () {

    Route::get('/', function () {
        return redirect()->route('teacher.dashboard');
    });

    Route::get('/dashboard', function () {
        return view('teacher.dashboard');
    })->name('teacher.dashboard');

    Route::get('dashboard/students', function () {
        return view('teacher.students');
    })->name('teacher.students');

    Route::get('/courses', [CoursesController::class, 'index'])->name('teacher.mycourses');

    Route::get('/courses/create', [CoursesController::class, 'create'])->name('teacher.courses.create');

    Route::post('/courses/create', [CoursesController::class, 'store'])->name('post.teacher.courses.create');

    Route::get('/courses/{course}', [CoursesController::class, 'course'])->name('teacher.courses.course');

    Route::get('/courses/{course}/module', [ModuleController::class, 'module'])->name('teacher.module.create');

    Route::post('/courses/{course}/module', [ModuleController::class, 'save'])->name('post.teacher.module.create');

    Route::get('/lectures/create', [LectureController::class, 'create'])->name('lectures.create');
    
    Route::post('/lectures', [LectureController::class, 'store'])->name('lectures.store');
});
