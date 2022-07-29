<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicPagesController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/auth/check', function() {
    return (Auth::check()) ? 1 : 2 ;
});
Route::post('/role/check', function() {
    return (Auth::check()) ? Auth::user() : 2 ;
});
Route::post('/status/check', [StudentsController::class, 'CheckStatus']);
Route::get('/',[PublicPagesController::class, 'index'])->name('talanta.home');
Route::get('/reg/page', [PublicPagesController::class, 'demo'])->name('demo.page');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile/update', [StudentsController::class, 'LoadUpdateView'])->name('profile.update.view');
Route::post('/profile/update', [StudentsController::class, 'StudentDetails'])->name('profile.update');
Route::get('/course-registration',[PublicPagesController::class, 'CourseRegistration'])->name('register.course');
Route::post('/course/registration', [StudentsController::class, 'SaveCourse'])->name('course.register');
