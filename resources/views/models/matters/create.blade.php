<x-app-layout>
    @section('title', 'Create Matter')
    <x-section class="border rounded-lg">
        <x-h type="h1">Create Matter</x-h>

        <form action="{{ route('admin.matters.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" class="form-control" required>
            </div>
            <!-- Add other fields as necessary -->
            <button type="submit" class="btn btn-success mt-2">Create</button>
        </form>
    </x-section>
</x-app-layout>
