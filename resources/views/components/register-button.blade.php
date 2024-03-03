@props(['type' => 'button'])

<button {{ $attributes->merge(['class' => 'inline-flex items-center px-14 py-2 bg-blue rounded-lg font-extrabold text-dark-blue text-lg tracking-widest hover:bg-yellow transition ease-in-out duration-150']) }} type="{{ $type }}">
    {{ $slot }}
</button>
