<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->group(function(){

Route::get('/',[HomeController::class,'index'])->name('dash');
Route::get('/projects',[PostController::class,'index'])->name('projects');

});

Route::prefix('portfolio')->group(function(){
Route::get('/', [IndexController::class,'index'])->name('home');
});
