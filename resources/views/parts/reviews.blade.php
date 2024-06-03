<div id="google-reviews" class="py-32 px-8">
    <div class="items-center space-y-20">
        <h2 class="font-serif text-2xl md:text-4xl text-gray-900 text-center">Google Reviews</h2>
        <div class="flex flex-row flex-wrap">
            @foreach($reviews as $review)
                <figure class="basis-1/3 text-gray-500 tracking-wide rounded-lg p-8">
                    <blockquote class="py-2">{{ $review['review_body'] }}</blockquote>
                    <figcaption class="font-mono">— {{ $review['name'] }}, {{ $review['created_at_diff'] }}</figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</div>
