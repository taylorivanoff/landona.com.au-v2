<x-app-layout>
    @section('title', 'Dashboard');
    <x-section>
        Hello, {{ auth()->user()->first_name }}!
    </x-section>
</x-app-layout>
