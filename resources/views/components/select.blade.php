@props(['options'])

<select {{ $attributes->merge(['class' => 'bg-light-blue h-24 ombre-blue rounded-lg cursor-pointer flex items-center justify-center text-dark-blue text-lg mt-6 mb-4']) }}>
    {{ $slot }}
</select>
