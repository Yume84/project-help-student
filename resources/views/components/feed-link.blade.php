@props(['active'])

@php
$classes = ($active ?? false)
    ? 'feed font-extrabold'
    : 'hover:feed hover:font-extrabold transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->class(['flex justify-center w-1/2 items-center text-dark-blue'])->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>