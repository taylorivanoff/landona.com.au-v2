@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-1 pt-1 border-b-2 border-blue-900 leading-5 focus:outline-none transition duration-150 ease-in-out'
                : 'inline-flex items-center px-1 pt-1 hover:text-blue-900 focus:outline-none focus:text-blue-900 focus:border-blue-900 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <h2>{{ $slot }}</h2>
</a>
