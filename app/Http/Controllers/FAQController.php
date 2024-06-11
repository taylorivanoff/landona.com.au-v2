<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    function index() {
        $path = storage_path('csvs/faqs.csv');

        $qa = [];

        if (($handle = fopen($path, 'r')) !== false) {
            $header = fgetcsv($handle, 1000, ','); // Assuming the first row is the header
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                $qa[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return view('pages/faq', ['qa' => $qa]);
    }
}
