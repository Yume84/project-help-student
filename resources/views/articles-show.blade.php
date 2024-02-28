<x-home-layout>
    <h1>
        {{ $article->title }} 
    </h1>

    <p>
        Contenu : {{ $article->content }}
    </p>

    <p>
        Langue : {{ $article->lang_id }}
    </p>

    <p>
        URL : {{ $article->slug}}
    </p>

        <!-- Présentation 
        <div class="bg-white ombre-blue p-4 mb-6">
            <h2 class="font-bold uppercase text-blue text-center text-2xl mb-4">Studdle c'est quoi ?</h2>
            <p class="text-lg text-left mb-8">Studdle est une plateforme dédiée aux jeunes universitaires étrangers venus étudier en France afin de les aider dans leurs démarches administratives. Mais ce n'est pas tout ! Si tu es un grand philanthrope, il est également possible que tu proposes ton aide. 😉</p>
        </div>-->

</x-home-layout>