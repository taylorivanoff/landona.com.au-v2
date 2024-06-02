<div class="lg:py-32 py-16 flex flex-col space-y-8">
    <h2 class="font-serif text-3xl text-gray-900 leading-relaxed">Google Reviews</h2>

    <div class="space-y-4 space-x-4">
        <button id="prev-btn" class="border p-2 rounded disabled:opacity-50" disabled>Previous</button>
        <button id="next-btn" class="border p-2 rounded disabled:opacity-50">Next</button>
    </div>

    <div id="reviews-container" class="flex flex-row flex-wrap justify-center">
        @foreach($reviews as $review)
            <figure class="review text-gray-500 tracking-wide pb-8 lg:p-8 hidden lg:basis-1/3">
                <blockquote class="py-2">{{ $review['review_body'] }}</blockquote>
                <figcaption class="font-mono">— {{ $review['name'] }}, {{ $review['created_at_diff'] }}</figcaption>
            </figure>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const reviews = document.querySelectorAll('.review');
        const reviewsPerPage = 1;
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

        showReviews(currentPage);
    });
</script>
