@props(['active'])

@php
$classes = ($active ?? false)
    ? 'bg-blue'
    : 'hover:bg-blue transition duration-150 ease-in-out'
@endphp

<a {{ $attributes->class(['block py-2.5 mt-2 px-4 rounded'])->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>