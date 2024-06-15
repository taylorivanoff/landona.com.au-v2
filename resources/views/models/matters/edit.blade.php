<x-app-layout>
    @section('title', 'Edit Matter')
    <x-section class="border rounded-lg">
        <x-h type="h1">Edit Matter</x-h>

        <form action="{{ route('admin.matters.update', $matter) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" class="form-control" value="{{ $matter->type }}" required>
            </div>
            <!-- Add other fields as necessary -->
            <button type="submit" class="btn btn-success mt-2">Update</button>
        </form>
    </x-section>
</x-app-layout>
