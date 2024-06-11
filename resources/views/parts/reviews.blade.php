<x-section  id="google-reviews">
    <x-h type="h1">Google Reviews</x-h>

    <div class="text-yellow-400 text-center text-3xl">
        &starf; &starf; &starf; &starf; &starf;
    </div>

    <div class="space-y-4 space-x-4">
        <button id="prev-btn" class="border p-2 rounded disabled:opacity-50" disabled>Previous</button>
        <button id="next-btn" class="border p-2 rounded disabled:opacity-50">Next</button>
    </div>

    <div id="reviews-container" class="flex flex-col justify-center">
        @foreach($reviews as $review)
            <x-blockquote
                class="review"
                author="{{ $review['name'] }}, {{ $review['created_at_diff'] }}"
            >{{ $review['review_body'] }}</x-blockquote>
        @endforeach
    </div>
</x-section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const reviews = document.querySelectorAll('.review');
        const reviewsPerPage = 3;
        let currentPage = 0;

        function showReviews(page) {
            reviews.forEach((review, index) => {
                review.classList.add('hidden');
                if (index >= page * reviewsPerPage && index < (page + 1) * reviewsPerPage) {
                    review.classList.remove('hidden');
                }
            });
            document.getElementById('prev-btn').disabled = page === 0;
            document.getElementById('next-btn').disabled = (page + 1) * reviewsPerPage >= reviews.length;
        }

        function nextPage() {
            if ((currentPage + 1) * reviewsPerPage < reviews.length) {
                currentPage++;
                showReviews(currentPage);
            } else {
                currentPage = 0; // Loop back to the first review
                showReviews(currentPage);
            }
        }

        function prevPage() {
            if (currentPage > 0) {
                currentPage--;
                showReviews(currentPage);
            }
        }

        document.getElementById('next-btn').addEventListener('click', nextPage);
        document.getElementById('prev-btn').addEventListener('click', prevPage);

        showReviews(currentPage);

        // setInterval(nextPage, 8000); // Automatically go to the next review every 8 seconds
    });
</script>
