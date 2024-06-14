<x-app-layout>
    @section('title', 'Dashboard');
    <x-section>
        Hello, {{ auth()->user()->name }}!
    </x-section>
</x-app-layout>

