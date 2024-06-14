<x-app-layout>
    @section('title', 'Dashboard');
    <x-section class="border rounded-lg">
        Hello, {{ auth()->user()->name }}!
    </x-section>
</x-app-layout>

