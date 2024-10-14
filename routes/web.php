<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MatterController;
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

require __DIR__ . '/auth.php';

// Routes for guest users
Route::middleware('guest')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('home');

    Route::view('/services', 'pages/home/about-us')->name('services');
    Route::view('/buying', 'pages/home/about-us')->name('about');
    Route::view('/selling', 'pages/home/about-us')->name('about');
    Route::view('/contract-review', 'pages/home/about-us')->name('about');
    Route::view('/title-transfer', 'pages/home/about-us')->name('about');


    Route::view('/about', 'pages/home/about-us')->name('about');
    Route::view('/resources', 'pages/home/resources')->name('resources');
    Route::resource('/enquiries', EnquiryController::class);
});

// Routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'pages/dashboard/dashboard')->name('dashboard');
});

// Routes for admin users
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('matters', MatterController::class);
    Route::post('matters/{matter}/next-status', [MatterController::class, 'nextStatus'])->name('matters.nextStatus');

    Route::resource('events', EventController::class);
    Route::get('/events/data', [EventController::class, 'data'])->name('events.data');
});
