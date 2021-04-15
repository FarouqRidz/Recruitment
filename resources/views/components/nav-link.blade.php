@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex space-x-2 items-center px-4 py-3 bg-gray-50 text-sm font-semibold leading-5 focus:outline-none focus:bg-white transition duration-150 ease-in-out rounded-tl-full rounded-bl-full'
            : 'inline-flex space-x-2 items-center px-4 py-3 bg-transparent text-sm font-semibold leading-5 text-gray-300 hover:text-white hover:bg-pink-700 focus:outline-none focus:text-gray-700 focus:bg-gray-300 transition duration-150 ease-in-out rounded-tl-full rounded-bl-full';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
