<x-app-layout>
    @section('title', 'Matters')
    <x-section-full class="border rounded-lg p-6 bg-white mt-20">
        <x-h type="h1" class="text-2xl font-bold mb-4">Matters</x-h>

        @if(session('success'))
            <div class="alert alert-success bg-green-100 text-green-800 px-4 py-2 rounded-md mt-4">
                {{ session('success') }}
            </div>
        @endif

        <x-admin-table :columns="$columns" :rows="$rows" routePrefix="admin.matters" />
    </x-section-full>
</x-app-layout>
