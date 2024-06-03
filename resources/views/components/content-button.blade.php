@props(['active'])

@php
    $classes = 'inline-flex items-center px-6 py-2 rounded-full text-white border-2 border-[#ff7f00] hover:bg-[#ff7f00] hover:text-white bg-white text-[#ff7f00]  disabled:opacity-25 transition ease-in-out duration-150 font-medium'
@endphp

<div>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</div>
