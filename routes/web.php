<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/resources', fn() => view('pages/home/resources'))->name('resources');
Route::get('/about-us', fn() => view('pages/home/about-us'))->name('about-us');
Route::get('/enquiry', [EnquiryController::class, 'create'])->name('enquiries.create');
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiries.store');


// Auth
Route::get('/dashboard', function () {
    return view('pages/dashboard/dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');

require __DIR__.'/auth.php';
