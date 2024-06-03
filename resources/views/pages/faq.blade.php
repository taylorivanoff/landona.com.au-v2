<x-app-layout>
    <x-section class="space-y-12">
        <x-h type="h1">Questions & Answers</x-h>
        @foreach($qa as $q)
            <h3 class="font-semibold">{{ $q['question'] }}</h3>
            <x-p>{{ $q['answer'] }}</x-p>
        @endforeach
    </x-section>
</x-app-layout>
