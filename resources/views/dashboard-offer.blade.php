<x-admin-layout>
    <x-slot name="feed">
        <x-feed-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8" >
                {{ __('Asking for help') }}
            </div>
        </x-feed-link>

        <x-feed-link :href="route('dashboard-offer')" :active="request()->routeIs('dashboard-offer')">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ __('Offering help') }}
            </div>
        </x-feed-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
            <livewire:posts.offer />
        </div>
    </div>
    
</x-admin-layout>
