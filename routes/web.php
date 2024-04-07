<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

$proxy_url    = getenv('PROXY_URL');
$proxy_schema = getenv('PROXY_SCHEMA');

if (!empty($proxy_url)) {
    URL::forceRootUrl($proxy_url);
}

if (!empty($proxy_schema)) {
    URL::forceSchema($proxy_schema);
}

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';
