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

</x-home-layout>