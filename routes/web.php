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

Route::get('/', function () {
    $path = storage_path('csvs/reviews.csv'); // Update this path to your CSV file location
    $reviews = [];
    if (($handle = fopen($path, 'r')) !== FALSE) {
        $header = fgetcsv($handle, 1000, ','); // Assuming the first row is the header
        while (($row = fgetcsv($handle, 1000, ',')) !== FALSE) {
            $reviews[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    foreach ($reviews as &$review) {
        $review['created_at_diff'] = Carbon\Carbon::parse($review['created_at'])->diffForHumans();
    }

    return view('pages/index', [
        'reviews' => $reviews
    ]);
})->name('home');

Route::get('/faq', function () {
    return view('pages/faq');
})->name('faq');

//Route::get('/blog', function () {
//    return view('pages/blog');
//})->name('blog');

Route::get('/resources', function () {
    return view('pages/resources');
})->name('resources');

Route::get('/about-us', function () {
    return view('pages/about-us');
})->name('about-us');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';
