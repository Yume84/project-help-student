<x-admin-layout>

<!--Couverture-->
<div class=" bg-dark-blue w-full h-60">
    <div class="flex items-center max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">

        <!--Photo de profil-->
        <img src="{{ asset('/images/exemple.jpg') }}" alt="avatar" class="block w-40 h-40 object-cover rounded border-blue ">

        <!--Contenu à droite de la photo-->
        <div class="ml-10 flex flex-col">
            <div x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name" class="text-blue"></div>
            <span class="mt-2 text-light-blue">Le statut sera ici</span>
            <x-post-button class="bg-blue hover:bg-yellow hover:text-dark-blue mt-4">{{ __('Edit Profile') }}</x-post-button>
        </div>
    </div>
</div>

<div class="max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
   
    <livewire:posts.create />

    <livewire:posts.list />

</div>
  

</x-admin-layout>