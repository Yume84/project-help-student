@props(['active'])

@php
$classes = ($active ?? false)
    ? 'bg-medium-blue'
    : 'hover:bg-medium-blue transition duration-150 ease-in-out'
@endphp

<a {{ $attributes->class(['block py-2.5 px-4 rounded'])->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>