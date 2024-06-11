<?php

namespace App\Http\Controllers;

use App\Services\DataService;

class IndexController extends Controller
{
    protected $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $reviews = $this->dataService->getReviews();
        $qa = $this->dataService->getFaqs();

        return view('pages.index', ['reviews' => $reviews, 'qa' => $qa]);
    }
}
