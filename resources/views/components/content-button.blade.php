@props(['active'])

@php
    $classes = 'inline-flex items-center px-10 py-2 rounded-full text-white text-lg border-blue-900 bg-blue-900 border-2 hover:bg-white hover:text-[#40538a] hover:border-[#40538a] disabled:opacity-25 transition ease-in-out duration-150 font-medium'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
