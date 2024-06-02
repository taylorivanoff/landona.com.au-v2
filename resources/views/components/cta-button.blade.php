@props(['active'])

@php
    $classes = 'inline-flex items-center px-10 py-2 rounded-full text-white h-12 border-[#ff6584] bg-[#ff6584] border-2 hover:bg-white hover:text-[#ff6584] hover:border-[#ff6584] disabled:opacity-25 transition ease-in-out duration-150 font-medium'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    <h3>{{ $slot }}</h3>
</a>
