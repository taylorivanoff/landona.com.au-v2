<a
    href="{{ $attributes->get('href') }}"
    class="inline-flex items-center px-6 py-2 rounded-full border-2 border-[#ff7f00] hover:bg-[#ff7f00] hover:text-white bg-white text-[#ff7f00]  disabled:opacity-25 transition ease-in-out duration-150 font-medium {{$attributes->get('class')}}"
    onclick="gtag('event', 'click', {'event_category': 'Button', 'event_label': '{{ $attributes->get('id') }}'});"
>
    {{ $slot }}
</a>
