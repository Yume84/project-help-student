@props(['disabled' => false])

<input 
    type="radio" 
    {{ $attributes->merge(['class' => 'hidden']) }} 
    {{ $disabled ? 'disabled' : '' }} 
>
<label 
    x-data="{ isActive: false }"
    @click="isActive = !isActive"
    :class="{ 'bg-yellow': isActive, 'bg-light-blue': !isActive }"
    class="bg-light-blue h-24 ombre-blue rounded-lg cursor-pointer flex items-center justify-center text-dark-blue text-lg mb-4" 
    for="{{ $attributes['id'] }}"
>
    {{ $slot }}
</label>
