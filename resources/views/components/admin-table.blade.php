<div class="overflow-x-auto">
    <table class="table-auto w-full mt-4 border-collapse">
        <thead>
        <tr class="text-left text-gray-900">
            @foreach($columns as $column)
                <th class="border px-4 py-2">{{ $column }}</th>
            @endforeach
            <th class="border px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rows as $row)
            <tr>
                @foreach($columns as $key => $column)
                    <td class="border px-4 py-2">{{ $row[$key] }}</td>
                @endforeach
                <td class="border px-4 py-2 flex space-x-2">
                    <a href="{{ route($routePrefix . '.edit', $row['id']) }}"
                       class="btn btn-warning bg-yellow-500 px-4 py-2 rounded-md">Edit</a>
                    <form action="{{ route($routePrefix . '.destroy', $row['id']) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger bg-red-500  px-4 py-2 rounded-md"
                                onclick="return confirm('Are you sure?')">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $rows->links() }}
    </div>
</div>
