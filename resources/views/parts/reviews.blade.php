<div id="google-reviews" class="py-32 px-8">
    <div class="items-center space-y-20">
        <h2 class="font-serif text-2xl md:text-4xl text-gray-900 text-center">Google Reviews</h2>
        <div class="text-center mt-10">
            <button id="prev-btn" class="underline px-4 py-2 rounded disabled:opacity-50" disabled>Previous</button>
            <button id="next-btn" class="underline px-4 py-2 rounded disabled:opacity-50">Next</button>
        </div>
        <div id="reviews-container" class="flex flex-row flex-wrap justify-center">
            @foreach($reviews as $review)
                <figure class="review text-gray-500 tracking-wide p-8 hidden basis-1/3">
                    <blockquote class="py-2">{{ $review['review_body'] }}</blockquote>
                    <figcaption class="font-mono">— {{ $review['name'] }}, {{ $review['created_at_diff'] }}</figcaption>
                </figure>
            @endforeach
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const reviews = document.querySelectorAll('.review');
        const reviewsPerPage = 6; // 2 rows of 3 reviews each
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

        // Initially show the first page
        showReviews(currentPage);
    });
</script>
