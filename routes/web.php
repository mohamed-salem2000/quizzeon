<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\studentdashboard\StudentdashboardController;
use App\Http\Controllers\studentdashboard\StudentExamController;
use App\Http\Controllers\studentdashboard\QuestionStudentController;
use App\Http\Controllers\studentdashboard\StudentMarkController;
use App\Http\Controllers\Studentdashboard\StudentProfileController;
use App\Http\Controllers\Instructodashboard\InstructodashboardController;
use App\Http\Controllers\Instructodashboard\SubjectController;
use App\Http\Controllers\Instructodashboard\ProfileController;
use App\Http\Controllers\Instructodashboard\ExamController;
use App\Http\Controllers\Instructodashboard\StatisticController;
use App\Http\Controllers\Instructodashboard\QuestionController;

// home controller
Route::get('/', [HomeController::class, 'index'])->name('index');
//end home controller


//signup and login controller
Route::resource('/signup', SignupController::class);
Route::POST('/login', [LoginController::class, 'login'])->name('login');
Route::POST('/storeinstructor', [SignupController::class, 'storeinstructor'])->name('storeinstructor');
Route::get('/signupinstructor', [SignupController::class, 'indexinstructor'])->name('indexinstructor');
//end signup and login controller


//Studentdashboard controller
Route::get('/studentdashboard', [StudentdashboardController::class, 'index'])->name('studentdashboard');
Route::get('/studentexam', [StudentExamController::class, 'index'])->name('studentexam');
Route::get('/question/{exam_id}', [StudentExamController::class, 'show'])->name('question');
Route::resource('/questions', QuestionStudentController::class);
Route::resource('/mark', StudentMarkController::class);
Route::resource('/studentprofile', StudentProfileController::class);
//end Studentdashboard controller


//Instructordashboard controller
Route::get('/instructodashboard', [InstructodashboardController::class, 'index'])->name('instructodashboard');
Route::resource('/subject', SubjectController::class);
Route::resource('/profile', profileController::class);
Route::resource('/exam', ExamController::class);

Route::get('/statistic/show/{id}', [StatisticController::class, 'show'])->name('statistic.show');

Route::get('/statistic', [StatisticController::class, 'index'])->name('statistic.index');

Route::resource('/question', QuestionController::class);
Route::POST('/addquestion', [ExamController::class, 'addquestion'])->name('addquestion');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');


//end Instructordashboard controller

