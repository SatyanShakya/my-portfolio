<?php

use App\Http\Controllers\Backend\AchievementsController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ResumeController;
use App\Http\Controllers\Backend\SkillsController;
use App\Http\Controllers\Frontend\IndexController;
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
Auth::routes();

Route::get('/', [IndexController::class,'index'])->name('home');
Route::get('/about', [IndexController::class,'about'])->name('about');
Route::get('/projects',[IndexController::class,'project'])->name('projects');
Route::get('/resume',[IndexController::class,'resume'])->name('resume');
Route::get('/contact',[IndexController::class,'contact'])->name('contact');



Route::middleware(['auth'])->group(function () {
Route::prefix('dashboard')->group(function(){

Route::get('/',[HomeController::class,'index'])->name('dash');

Route::resource('projects',PostController::class);
Route::resource('skills',SkillsController::class);
Route::resource('achievements',AchievementsController::class);
Route::resource('resumes',ResumeController::class);


});

});
