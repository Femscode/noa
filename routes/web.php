<?php

use Illuminate\Support\Facades\Route;


// route for the courses
Auth::routes();
// Route::any('/', [App\Http\Controllers\UserController::class, 'homepage'])->name('homepage');
Route::any('/', [App\Http\Controllers\UserController::class, 'course'])->name('course')->middleware('auth');
Route::group(['middleware' => 'auth'], function() {
//route for courses
Route::any('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
Route::any('/deletecourse', [App\Http\Controllers\UserController::class, 'deletecourse'])->name('deletecourse');
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
//route for announcemet

});
// Route::get('/', function () {
//     return view('welcome');
// });
