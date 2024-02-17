@props(['href', 'image', 'alt'])

<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start leading-5 bg-dark-blue hover:bg-blue text-light-blue rounded focus:outline-none transition duration-150 ease-in-out']) }} href="{{ $href }}">
    <img src="{{ $image }}" alt="{{ $alt }}" class="h-8 w-8 inline-block mr-2">
    {{ $slot }}
</a>
