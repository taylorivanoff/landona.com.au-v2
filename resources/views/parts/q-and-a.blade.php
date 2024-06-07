<x-section>
    <x-h type="h1">Questions & Answers</x-h>
    <div id="accordion">
        @foreach($qa as $index => $q)
            <div class="border-b border-gray-200">
                <h3 class="font-semibold">
                    <button class="text-left py-4 focus:outline-none focus:ring" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                        {{ $q['question'] }}
                    </button>
                </h3>
                <div id="collapse{{ $index }}" class=" py-4 hidden transition duration-300 ease-in-out" aria-labelledby="heading{{ $index }}">
                    <div class="">
                        <x-p>{{ $q['answer'] }}</x-p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var accordionButtons = document.querySelectorAll('[data-toggle="collapse"]');

        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                var target = document.querySelector(this.getAttribute('data-target'));

                if (target.classList.contains('hidden')) {
                    document.querySelectorAll('#accordion .accordion-collapse').forEach(item => {
                        item.classList.add('hidden');
                        item.classList.remove('block');
                    });
                    target.classList.remove('hidden');
                    target.classList.add('block');
                } else {
                    target.classList.add('hidden');
                    target.classList.remove('block');
                }
            });
        });
    });
</script>
