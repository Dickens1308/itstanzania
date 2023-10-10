<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about-us', [IndexController::class, 'about'])->name('about');
Route::get('/services', [IndexController::class, 'service'])->name('services');
Route::get('/contact-us', [IndexController::class, 'contact'])->name('contact');
Route::get('/news', [IndexController::class, 'news'])->name('news');
