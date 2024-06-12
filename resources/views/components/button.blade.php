<button {{ $attributes->merge(
	[
		'type' => 'submit',
		'class' => 'inline-flex items-center px-10 py-3  border border-transparent rounded-full text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 font-sans'
		])
	}}
    onclick="gtag('event', 'click', {'event_category': 'Button', 'event_label': '{{ $attributes->get('id') }}'});"
>
    {{ $slot }}
</button>
