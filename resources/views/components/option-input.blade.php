@props(['disabled' => false, 'value' ])

<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'bg-light-blue h-20 ombre-blue rounded-lg']) }} >
    {{ $value ?? $slot }}
</input>
