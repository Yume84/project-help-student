@props(['active'])

@php
$classes = ($active ?? false)
    ? 'bg-blue'
    : 'hover:bg-blue transition duration-150 ease-in-out'
@endphp

<a {{ $attributes->class(['block flex justify-center py-2.5 px-4 m-2 rounded'])->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
