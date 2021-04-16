@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex space-x-2 pl-3 pr-4 py-2 border-l-4 border-pink-400 text-base font-medium bg-white focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out'
            : 'flex space-x-2 pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:text-white hover:bg-pink-700 focus:outline-none focus:text-gray-800 focus:bg-gray-300 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
