<?php

namespace App\Services;

use App\Models\Faq;
use App\Models\Review;
use Illuminate\Support\Carbon;

class DataService
{
    public function getReviews()
    {
        // Fetch reviews from the database
        $reviews = Review::all();

        // Add 'created_at_diff' to each review
        foreach ($reviews as $review) {
            $review->created_at_diff = Carbon::parse($review->created_at)->diffForHumans();
        }

        // Sort reviews by 'created_at' in descending order
        return $reviews->sortByDesc('created_at');
    }

    public function getFaqs()
    {
        // Fetch reviews from the database
        return Faq::all();
    }
}
