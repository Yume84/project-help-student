<x-admin-layout>
    <x-slot name="feed">
        <x-feed-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" >
                {{ __('Pour moi') }}
            </div>
        </x-feed-link>

        <x-feed-link :href="route('notifications')" :active="request()->routeIs('notifications')">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ __('Découvrir') }}
            </div>
        </x-feed-link>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <div class="py-12">
        <div class="max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
            <livewire:posts.list />
        </div>
    </div>
    
</x-admin-layout>
