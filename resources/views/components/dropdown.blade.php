@props(['contentClasses' => 'py-1 bg-white'])

<div class="relative cursor-pointer {{$attributes->get('class')}}" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @mouseenter="open = true" @mouseleave="open = false"
         class="inline-flex items-center pt-1 hover:text-gray-600 focus:outline-none focus:text-blue-900 focus:border-blue-900 transition duration-150 ease-in-out">
        {{ $trigger }}

        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" class="ml-2">
            <path d="M7 10L12 15L17 10" stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class=" absolute z-20 m-6 p-6 bg-white border border-gray-100 w-72 rounded-lg origin-top-left left-0 "
         style="display: none;"
         @mouseenter="open = true" @mouseleave="open = false">
        <div class="flex flex-col space-y-4 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
