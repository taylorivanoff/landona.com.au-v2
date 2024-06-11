@php
    $href = $attributes->get('href');
    $classes = 'inline-flex items-center px-6 py-2 rounded-full border-2 border-blue-900 hover:bg-blue-900 hover:text-white bg-white text-blue-900 disabled:opacity-25 transition ease-in-out duration-150 font-medium';
@endphp

<a
    href="{{ $href }}"
    class="{{ $classes }}"
    {{ $attributes->merge() }}>
    {{ $slot }}
</a>
