<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-dark-blue border border-transparent rounded-md font-semibold text-xs text-light-blue uppercase tracking-widest hover:bg-blue transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
