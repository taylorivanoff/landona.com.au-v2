<div class="columns-1 max-w-screen-lg mx-auto mt-24 mb-16 lg:mb-24 pt-16 lg:pt-24 pb-16 lg:pb-24 {{ $attributes->get('class') }}" id="{{ $attributes->get('id') }}">
    <div class="flex flex-col space-y-8 px-8">
        {{ $slot }}
    </div>
</div>
