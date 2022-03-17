<?php

use Illuminate\Support\Facades\Route;

/*
https://webhooks.hostinger.com/deploy/2a7ad6c97cb40574126c08fe53a65abb
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home');
// });
//route for frontend
Route::any('/', function() {
return view('welcome');
})->name('home');
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
