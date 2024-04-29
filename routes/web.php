<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgLangController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/* Basic routes */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/docs' , function(){
    return view('docs');
})->name('docs');
Route::get('/calendar', function(){
    return view('calendar/index');
})->name('calendar');



/*
|--------------------------------------------------------------------------
| Course Routes
|----*/

Route::resource('/courses', CourseController::class);

Route::get('/create_course_data' , function(){
    return view('courses/create_course_data');
})->name('/create_course_data');

Route::get('/create_course_questions' , function(){
    return view('courses/create_course_questions');
})->name('/create_course_questions');

/*
|--------------------------------------------------------------------------
| School Routes
|----*/

Route::resource('/schools', SchoolController::class);

/* Usertable routes */
Route::get('/profile',[UsersController::class, 'show'])->name('profile');
Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/{user}', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users_update/{user}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
Route::post('/checkInputData', [UsersController::class, 'checkInputData'])->name('checkInputData');


/* ProgLang rutes */

Route::resource('/progLang', ProgLangController::class);

Route::get('/language/{name}', function($name) {
    // Pass the $name variable to the view
    return view('language\\'.$name, ['name' => $name]);
})->name('/language/{name}');





// 